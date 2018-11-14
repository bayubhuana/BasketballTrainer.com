<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('video', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('member_id')->unsigned();
        $table->foreign('member_id')->references('id')->on('member');
        $table->string('video');
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

          schema::drop('video');
    }
}
