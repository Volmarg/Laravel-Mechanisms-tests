<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $amount=10;

        for($x=0;$x<=$amount;$x++){
            DB::table('data_caching_tests')->insert([
                'name'=>str_random(10),
            ]);
        }

    }
}
