<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodstypes')->insert([
            ['name' => 'MENSUAL'],
            ['name' => 'SEMANAL'],
            ['name' => 'QUINCENAL'],
            ['name' => 'DIARIO'],
        ]);
    }
}
