<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cluster; 
use App\Models\Sale;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(2)->create();
        \App\Models\Operator::factory(3)->create();
        \App\Models\Sale::factory(3)->create();*/
        /*\App\Models\User::factory(3)->has(\App\Models\Cluster::factory(1)->
        has(\App\Models\Sale::factory(4))  ->count(4))->count(5)
        ->create();*/

        \App\Models\Transaction::factory(50)->create();
        
        #\App\Models\User::factory(2)->create();

        #\App\Models\pos::factory(10)->has(\App\Models\clusters::factory(5))->create();

        //\App\Models\Cluster::factory(10) ->has(\App\Models\Sale::factory(4))  ->count(10)->create();


    }
}
