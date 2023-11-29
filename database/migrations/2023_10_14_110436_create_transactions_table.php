<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** les valeurs de la transaction 
         * seront renseignée à travers l'api du numero qui
         * effectue la transaction */
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->double('amount', 8, 2);
            $table->string('type');
            $table->foreignId('sale_id')
                            ->constrained()
                            ->onUpdate('cascade') 
                            ->onDelete('cascade');
            $table->foreignId('operator_id')
                            ->constrained()
                            ->onUpdate('cascade') 
                            ->onDelete('cascade');
            $table->string('destinator');
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
        Schema::dropIfExists('transactions');
    }
}
