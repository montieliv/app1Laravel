<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovsapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('movsaps', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('idTSap');  //trabajador
            $table->string('nombreT');  //organismo
            $table->char('tipo',50);  //# escalafon
            $table->char('fecha',10);   // pos. dentro de su escalafon          
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
        Schema::drop('movsaps');
    }
}
