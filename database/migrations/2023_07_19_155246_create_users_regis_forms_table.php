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
        Schema::create('users_regis_forms', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->date('fecha_inscripcion');
            $table->string('name');
            $table->string('appe_mat');
            $table->string('appe_pat');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('municipio');
            $table->integer('cel');
            $table->string('email')->unique();
            $table->string('tipo_participante');
            $table->integer('enrollment')->nullable();
            $table->string('division');
            $table->string('grupo');
            $table->string('cuatrimestre');
            $table->string('turno');
            $table->bigInteger('activities_id')->unsigned();
            $table->timestamps();

            $table->foreign('activities_id')->references('id')->on('actividads')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_regis_forms');
    }
};
