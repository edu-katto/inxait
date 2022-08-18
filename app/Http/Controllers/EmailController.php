<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participantes;

class EmailController extends Controller
{
    public function emailConfirm($token){

        //buscamos en la base de datos si existe un usuario con ese token
        $existe = Participantes::where('token_validacion' , $token)
            ->count();

        //verificamos la cantidad de datos traidos de la base de datos para saber si encontro datos
        if ($existe >= 1){

            //cuando se confima que exite un registro con el token se actualiza el estado y se borra el token
            Participantes::where('token_validacion' , $token)
                ->update(['validacion' => '1', 'token_validacion' => '']);

            //volvemos al formulario para confirmar el registro completo en el sorteo
            return redirect()
                ->route('inicio','#concurso')
                ->with('success','Ya validamos tu correo, ya estas participando por un SUBARU XV!');
        }

        //mensaje de aviso para que el usuario sepa que el correo ya fue aceptado anteriormente
        return redirect()
            ->route('inicio','#concurso')
            ->with('info','Ya este correo fue validado');
    }
}
