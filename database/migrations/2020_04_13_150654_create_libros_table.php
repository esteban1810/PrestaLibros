<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genero_id')->nullable();//->nullable();
            $table->string('autor','50');
            $table->string('portada');
            $table->string('titulo','50');
            $table->string('editorial','30');
            $table->string('edicion');
            $table->Integer('anio');
            $table->string('descripcion');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
