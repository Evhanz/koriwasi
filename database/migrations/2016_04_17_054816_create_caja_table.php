<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('caja',function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('tipo_cambio',9,3);
            $table->dateTime('fecha');
            $table->string('observacion');

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
        //
        Schema::drop('caja');
    }
}
