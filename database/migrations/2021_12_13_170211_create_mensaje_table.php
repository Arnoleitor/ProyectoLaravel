<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idusuario');
            $table->foreign('idusuario')
            ->references('id')
            ->on('usuarios')
            ->unsigned()
            ->constrained('usuarios')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedInteger('idparty');
            $table->foreign('idusuario')
            ->references('id')
            ->on('parties')
            ->unsigned()
            ->constrained('parties')
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
        Schema::dropIfExists('chats');
    }
}
