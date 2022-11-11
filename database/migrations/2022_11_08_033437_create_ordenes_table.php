<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cliente_id')->nullable();
            $table->unsignedInteger('producto_id')->nullable();
            $table->unsignedInteger('orden_anterior_id');
            $table->string('nombre')->nullable();
            $table->integer('cantidad')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->text('observaciones');
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
        Schema::dropIfExists('ordenes');
    }
}
