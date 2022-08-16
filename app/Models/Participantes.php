<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    use HasFactory;

    protected $primaryKey = "cod_participantes";
    protected $table = "participantes";
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'cod_departamento',
        'cod_ciudad',
        'correo',
        'terminos_condiciones',
        'validacion',
        'token_validacion'
    ];

    public function getKeyName(){
        return "cod_inventario";
    }

    public function getView(){
        return 'vista_participantes';
    }
}
