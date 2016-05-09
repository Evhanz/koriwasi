<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prestamo',function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('cantidad',9,3);
            $table->decimal('tipo_moneda',9,2);
            $table->string('estado');
            $table->decimal('interes',9,2);
            $table->string('n_letras');
            $table->string('tipo');

            //relaciones
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persona');


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
        Schema::drop('prestamo');
    }
}
