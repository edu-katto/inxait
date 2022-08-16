<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participantes;
use Illuminate\Support\Str;

class ParticipantesController extends Controller
{

    public function store(Request $request, Participantes $participantes){

        $this->validate($request, [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required|numeric|min:7|unique:participantes,cedula',
            'telefono' => 'required|numeric|min:10|unique:participantes,telefono',
            'cod_departamento' => 'required',
            'cod_ciudad' => 'required',
            'correo' => 'required|email|unique:participantes,correo',
            'terminos_condiciones' => 'required',
        ]);

        $participantes->create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'cod_departamento' => $request->cod_departamento,
            'cod_ciudad' => $request->cod_ciudad,
            'correo' => $request->correo,
            'terminos_condiciones' => $request->terminos_condiciones,
            'validacion' => 0,
            'token_validacion' => Str::uuid()
        ]);

        return redirect()
            ->route('participantes.create')
            ->with('success','Felicitaciones ya solo falta que leas el mensaje que te acabamos de mandar al correo!');
    }
}
