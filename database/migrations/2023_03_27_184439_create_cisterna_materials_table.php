<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCisternaMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cisterna_materiais', function (Blueprint $table) {
            $table->unsignedBigInteger('cisterna_id');
            $table->unsignedBigInteger('tipo_material_id');
            $table->timestamps();
            $table->foreign('cisterna_id')->references('id')->on('cisternas')->onDelete('cascade');
            $table->foreign('tipo_material_id')->references('id')->on('tipo_materiais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cisterna_materiais');
    }
}
