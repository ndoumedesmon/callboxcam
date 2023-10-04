<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbcTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('user', function (Blueprint $table) {
            $table->bigInteger('id_user')->primary();
            $table->string('username');
            $table ->string('role');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('parent_id');
            $table->bigInteger('id_cluster')->index();
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
        Schema::dropIfExists('user');
  
    }
}
