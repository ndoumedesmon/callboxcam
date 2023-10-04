<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('pos', function (Blueprint $table) {
            $table->bigInteger('id_pos')->primary();
            $table->string('posname');
            $table -> float('longitude');
            $table -> float('latitude');
            $table->bigInteger('id_user')->index();
            $table->string('num_cpt_op')->index();
            $table->string('city');
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
        Schema::dropIfExists('pos');
    }
}
