<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIoCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('io_caja',function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('cant_soles',9,2);
            $table->decimal('cant_dolares',9,2);

            //relaciones
            $table->integer('caja_id')->unsigned();
            $table->foreign('caja_id')->references('id')->on('caja');


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
        Schema::drop('io_caja');
    }
}
