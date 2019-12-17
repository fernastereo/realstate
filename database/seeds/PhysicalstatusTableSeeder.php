<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhysicalstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('physicalstatus')->insert([
            ['name' => 'NUEVO'],
            ['name' => 'USADO'],
            ['name' => 'EN CONSTRUCCION'],
            ['name' => 'EN PROYECTO'],
        ]);
    }
}
