<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbcTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table ->string('role');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('posname');
            $table->float('longitude');
            $table->float('latitude');
            $table->string('city');
            $table->foreignId('user_id')
                            ->constrained()
                            ->onUpdate('restrict') 
                            ->onDelete('restrict');
            $table->foreignId('operator_id')
                            ->constrained()
                            ->onUpdate('restrict') 
                            ->onDelete('restrict');
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();
        Schema::create('cluster', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')
                            ->constrained()
                            ->onUpdate('restrict') 
                            ->onDelete('restrict');
            $table->timestamps();
        });

      
        Schema::create('operator', function (Blueprint $table) {
            $table->id();
            $table->string('nom_op');
            $table-> boolean('isAPI');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('pos_cluster');
        Schema::dropIfExists('pos');
        Schema::dropIfExists('cpt_operateur');
    }
}
