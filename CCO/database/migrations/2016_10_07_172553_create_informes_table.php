<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('idT');  //trabajador
            $table->tinyInteger('idO');  //organismo
            $table->tinyInteger('idE');  //# escalafon
            $table->tinyInteger('posicion');   // pos. dentro de su escalafon          
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
        Schema::drop('informes');
    }
}
