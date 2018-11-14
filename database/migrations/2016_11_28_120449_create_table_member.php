<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMember extends Migration
{


    public function up()
    {
      Schema::create('member', function(Blueprint $table)
      {
          $table->increments('id');
          $table->string('username');
          $table->string('foto_profile');
          $table->string('email')->unique();
          $table->string('password',60);
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
        schema::drop('member');
    }
}
