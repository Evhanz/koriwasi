<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoLetraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('pago_letra',function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('monto',9,2);
            $table->date('fecha');
            $table->string('observacion');


            //relaciones
            $table->integer('letra_id')->unsigned();
            $table->foreign('letra_id')->references('id')->on('letra');





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
        Schema::drop('pago_letra');
    }
}
