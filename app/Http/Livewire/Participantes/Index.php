<?php

namespace App\Http\Livewire\Participantes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Participantes;
use App\Models\Departamento;
use App\Models\Ciudad;

use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $correo;
    public $terminos_condiciones;

    public $ciudades = NULL;
    public $departamento = NULL;
    public $cod_departamento = NULL;
    public $cod_ciudad = NULL;

    protected $rules = [
        'nombre' => 'required|string|regex:/^[\pL\s\-]+$/u',
        'apellido' => 'required|string|regex:/^[\pL\s\-]+$/u',
        'cedula' => 'required|numeric|min:6|unique:participantes,cedula',
        'telefono' => 'required|numeric|min:10|unique:participantes,telefono',
        'cod_departamento' => 'required',
        'cod_ciudad' => 'required',
        'correo' => 'required|email|unique:participantes,correo',
        'terminos_condiciones' => 'required',
    ];

    public function render(){
        return view('livewire.participantes.index', [
            'departamentos' => Departamento::all(),
            'ganador' => Participantes::where('ganador', 1)->get()->first()

        ])->extends('layouts.landingPage')
          ->section('content');

    }

    public function updatedcodDepartamento($cod_departamento){
        $this->ciudades = Ciudad::where('cod_departamento', $cod_departamento)->get();
    }

    public function save(){

        $this->validate();

        if ($this->cod_ciudad != 107){
            return redirect()
                ->back()
                ->with('info','lo sentimos este concurso solo esta disponible para la ciudad de Bogota');
        }

        //token validacion correo
        $token = Str::uuid();

        Participantes::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'cedula' => $this->cedula,
            'telefono' => $this->telefono,
            'cod_departamento' => $this->cod_departamento,
            'cod_ciudad' => $this->cod_ciudad,
            'correo' => $this->correo,
            'terminos_condiciones' => $this->terminos_condiciones == 'on' ? '1' : '0',
            'validacion' => 0,
            'token_validacion' => $token
        ]);

        //envio de correo
        $mailData = [
            'token' => $token,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ];

        $correo = new ConfirmEmail($mailData);
        Mail::to($this->correo)->send($correo);

        return redirect()
            ->back()
            ->with('success','Ya casi estas listo para participar, solo falta que leas el correo que te mandamos');
    }
}
