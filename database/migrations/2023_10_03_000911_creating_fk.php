<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatingFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pos_cluster', function (Blueprint $table) {
            $table->foreign('id_pos')->references('id_pos')->on('pos');
        });

        Schema::table('pos', function (Blueprint $table) {
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('num_cpt_op')->references('num_cpt_op')->on('cpt_operateur');
         
        });

        Schema::table('user', function (Blueprint $table) {
            $table->foreign('id_cluster')
            ->references('id_cluster')->on('pos_cluster')->onDelete('cascade');
           
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
    }
}
