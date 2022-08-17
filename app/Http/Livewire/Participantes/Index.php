<?php

namespace App\Http\Livewire\Participantes;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Participantes;
use Illuminate\Support\Str;

class Index extends Component
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $cod_departamento;
    public $cod_ciudad;
    public $correo;
    public $terminos_condiciones;

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

    public function render()
    {
        return view('livewire.participantes.index')
            ->extends('layout.landingPage')
            ->section('content');
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
