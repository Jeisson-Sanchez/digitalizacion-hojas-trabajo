<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('papel_id')->nullable();
            $table->unsignedInteger('corte_id')->nullable();
            $table->unsignedInteger('tiro_id')->nullable();
            $table->unsignedInteger('tipo_id')->nullable();
            $table->unsignedInteger('color_id')->nullable();
            $table->string('retiro')->nullable();
            $table->string('tamano')->nullable();
            $table->integer('numeracion_ini')->nullable();
            $table->integer('numeracion_fin')->nullable();
            $table->integer('estado')->default(1);
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
        Schema::dropIfExists('productos');
    }
}
