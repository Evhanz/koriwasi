<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('compra',function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('cantidad',9,2);
            $table->decimal('tipo_cambio',9,2);
            $table->date('fecha');
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
        Schema::drop('compra');
    }
}
