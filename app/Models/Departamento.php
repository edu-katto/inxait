<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ciudad;

class Departamento extends Model
{
    use HasFactory;

    protected $primaryKey = "cod_departamento";
    protected $table = "departamento";
    protected $fillable = [
        'departamento'
    ];

    public function ciudad(){
        return $this->hasMany(Ciudad::class);
    }
}
