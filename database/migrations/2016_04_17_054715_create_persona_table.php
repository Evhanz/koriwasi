<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('persona',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombres');
            $table->string('dni');
            $table->string('telefono');
            $table->string('celular');

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
        Schema::drop('persona');

    }
}
