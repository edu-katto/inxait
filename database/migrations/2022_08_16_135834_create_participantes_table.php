<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id('cod_participantes');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->bigInteger('cedula')->unique();
            $table->bigInteger('telefono')->unique();
            $table->bigInteger('cod_departamento')->unsigned();
            $table->bigInteger('cod_ciudad')->unsigned();
            $table->string('correo', 80)->unique();
            $table->boolean('terminos_condiciones');
            $table->boolean('validacion');
            $table->uuid('token_validacion')->unique();
            $table->timestamps();

            //relaciones
            $table->foreign('cod_departamento')->references('cod_departamento')->on('departamento');
            $table->foreign('cod_ciudad')->references('cod_ciudad')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_participantes');
    }
};
