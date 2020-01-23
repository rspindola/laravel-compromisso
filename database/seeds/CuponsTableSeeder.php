<?php

use Illuminate\Database\Seeder;

class CuponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cupon::class, 10)->create();
    }
}
