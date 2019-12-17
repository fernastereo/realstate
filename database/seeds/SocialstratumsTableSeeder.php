<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialstratumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socialstratums')->insert([
            ['name' => 'N/D'],
            ['name' => '1'],
            ['name' => '2'],
            ['name' => '3'],
            ['name' => '4'],
            ['name' => '5'],
            ['name' => '6'],
            ['name' => 'COMERCIAL'],
            ['name' => 'INDUSTRIAL'],
            ['name' => 'INSTITUCIONAL'],
        ]);
    }
}
