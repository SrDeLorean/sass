<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rutEmisor');
            $table->string('nombreEmisor');
            $table->string('rutDestinatario');
            $table->string('nombreDestinatario');
            $table->string('region');
            $table->string('direccion');
            $table->string('descripcion');
            $table->integer('peso');
            $table->integer('tamanoL');
            $table->integer('tamanoA');
            $table->integer('tamanoH');
            $table->integer('valor');
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
        Schema::dropIfExists('envios');
    }
}
