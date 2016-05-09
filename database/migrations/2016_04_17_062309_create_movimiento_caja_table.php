<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('movimiento_caja',function(Blueprint $table)
        {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->decimal('cantidad');
            $table->string('observacion');


            //relaciones
            $table->integer('ventas_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('ventas_id')->references('id')->on('venta');
            $table->integer('pago_letra_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('pago_letra_id')->references('id')->on('pago_letra');
            $table->integer('compras_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('compras_id')->references('id')->on('compra');
            $table->integer('caja_id')->unsigned()->nullable()->default(NULL);
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
        Schema::drop('movimiento_caja');
    }
}
