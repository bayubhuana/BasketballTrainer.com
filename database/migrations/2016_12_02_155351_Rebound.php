<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rebound extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Rebound', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('member_id')->unsigned();
        $table->foreign('member_id')->references('id')->on('member');
        $table->integer('time_training');
        $table->rememberToken();
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
         schema::drop('Rebound');
     }
}
