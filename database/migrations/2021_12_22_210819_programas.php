<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('pro_estado_programa')->unsigned();
            $table->integer('pro_departamento')->unsigned();
            $table->integer('pro_municipio')->unsigned();
            $table->integer('pro_facultad')->unsigned();
            $table->string('pro_nombre', 100);
            $table->string('pro_titulo', 100);
            $table->string('pro_codigosnies',100);
            $table->string('pro_resolucion',250);
            $table->date('pro_fecha_ult');
            $table->date('pro_fecha_prox');
            $table->integer('pro_nivel_formacion')->unsigned();
            $table->string('pro_programa_ciclos',3);
            $table->integer('pro_metodologia')->unsigned();
            $table->integer('pro_duraccion');
            $table->string('pro_periodo');
            $table->integer('pro_creditos');
            $table->integer('pro_asignaturas');
            $table->integer('pro_norma');
            $table->string('pro_director_programa');

            $table->foreign("pro_estado_programa")->references("id")->on("estado_programas");
            $table->foreign("pro_departamento")->references("id")->on("departamentos");
            $table->foreign("pro_municipio")->references("id")->on("municipios");
            $table->foreign("pro_facultad")->references("id")->on("facultades");
            $table->foreign("pro_nivel_formacion")->references("id")->on("nivelformacion");
            $table->foreign("pro_metodologia")->references("id")->on("metodologia");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
