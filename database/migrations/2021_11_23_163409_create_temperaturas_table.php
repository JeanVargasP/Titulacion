<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTemperaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion')->nullable();
            $table->integer('Grados')->nullable();
            $table->boolean('estado')->nullable()->default(false);
            

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('temperaturas');
    }
}
