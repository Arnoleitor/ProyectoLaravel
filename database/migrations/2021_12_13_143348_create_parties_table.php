<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            // $table->increments('id');
            // $table->String('nombre',100);
            // $table->unsignedInteger('idusuario')
            // ->references('id')
            // ->on('usuarios')
            // ->unsigned()
            // ->constrained('usuarios')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            // $table->unsignedInteger('idjuego')
            // ->references('id')
            // ->on('juegos')
            // ->unsigned()
            // ->constrained('juegos')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            // $table->timestamps();


            $table->increments('id');
            $table->string('nombre',100);
            $table->string('idusuario');
            
            $table->unsignedInteger('idjuego');
            $table->foreign('idjuego')
            ->references('id')
            ->on('juegos')
            ->unsigned()
            ->constrained('juegos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('parties');
    }
}
