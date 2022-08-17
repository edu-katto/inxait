<?php

namespace App\Http\Livewire\Participantes;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Participantes;
use App\Models\Departamento;
use App\Models\Ciudad;

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
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'cedula' => 'required|numeric|min:7|unique:participantes,cedula',
        'telefono' => 'required|numeric|min:10|unique:participantes,telefono',
        'cod_departamento' => 'required',
        'cod_ciudad' => 'required',
        'correo' => 'required|email|unique:participantes,correo',
        'terminos_condiciones' => 'required',
    ];

    public function render(){
        return view('livewire.participantes.index', [
            'departamentos' => Departamento::all()

        ])->extends('layout.landingPage')
          ->section('content');

    }

    public function updatedcodDepartamento($cod_departamento){
        $this->ciudades = Ciudad::where('cod_departamento', $cod_departamento)->get();
    }

    public function save(){

        $this->validate();

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
            'token_validacion' => Str::uuid()
        ]);

        return redirect()
            ->route('inicio')
            ->with('success','Ya casi estas listo para participar, solo falta que leas el correo que te mandamos');
    }
}
