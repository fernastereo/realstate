<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adsstatus')->insert([
            ['name' => 'DESTACADO'],
            ['name' => 'ACTIVO'],
            ['name' => 'INACTIVO']
        ]);
    }
}
