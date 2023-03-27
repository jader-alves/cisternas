<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCisternasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cisternas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 200);
            $table->date('data_inauguracao');
            $table->string('localizacao', 200)->nullabe();
            $table->string('coordenadas')->nullabe();
            $table->string('cep')->nullabe();
            $table->string('cidade')->nullabe();
            $table->string('estado')->nullabe();
            $table->unsignedBigInteger('tipo_construcao_id');
            $table->unsignedBigInteger('entidade_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('entidade_id')->references('id')->on('entidades');
            $table->foreign('tipo_construcao_id')->references('id')->on('tipo_construcoes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cisternas');
    }
}
