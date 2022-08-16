<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Departamento;

class Ciudad extends Model
{
    use HasFactory;

    protected $primaryKey = "cod_ciudad";
    protected $table = "ciudad";
    protected $fillable = [
        'ciudad',
        'cod_departamento'
    ];

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
}
