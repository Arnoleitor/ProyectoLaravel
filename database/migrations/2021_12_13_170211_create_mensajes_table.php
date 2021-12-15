<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idusuario',20);
            $table->string('idparty',20);
            $table->string('mensaje',200);

            // $table->unsignedInteger('idmensaje');
            // $table->foreign('idjuego')
            // ->references('id')
            // ->on('juegos')
            // ->unsigned()
            // ->constrained('juegos')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            


            
            $table->timestamps();


            // $table->increments('id');
            // $table->unsignedInteger('idusuario');
            // $table->foreign('idusuario')
            // ->references('id')
            // ->on('usuarios')
            // ->unsigned()
            // ->constrained('usuarios')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            // $table->unsignedInteger('idparty');
            // $table->foreign('idparty')
            // ->references('id')
            // ->on('parties')
            // ->unsigned()
            // ->constrained('parties')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            // $table->string('mensaje',200);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
