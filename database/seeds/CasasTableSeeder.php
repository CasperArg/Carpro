<?php

use Illuminate\Database\Seeder;

class CasasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Casa::class, 20)->create();
    }
}
