<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinationtypes')->insert([
            ['name' => 'VENTA'],
            ['name' => 'ALQUILER'],
            ['name' => 'PERMUTAR'],
            ['name' => 'VENTA-ALQUILER'],
        ]);
    }
}
