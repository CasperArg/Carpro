<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Auto::class, 50)->create();
        
    }
}
