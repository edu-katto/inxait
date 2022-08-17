<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participantes;

class EmailController extends Controller
{
    public function emailConfirm($token){

        $existe = Participantes::where('token_validacion' , $token)
            ->count();

        if ($existe >= 1){
            Participantes::where('token_validacion' , $token)
                ->update(['validacion' => '1', 'token_validacion' => '']);

            return redirect()
                ->route('inicio','#concurso')
                ->with('success','Ya validamos tu correo, ya estas participando por un SUBARU XV!');
        }

        return redirect()
            ->route('inicio','#concurso')
            ->with('info','Ya este correo fue validado');
    }
}
