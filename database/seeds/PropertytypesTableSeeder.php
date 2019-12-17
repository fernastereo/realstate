<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertytypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propertytypes')->insert([
            ['name' => 'APARTAESTUDIO'],
            ['name' => 'APARTAMENTO'],
            ['name' => 'BODEGA'],
            ['name' => 'CABAÑA'],
            ['name' => 'CASA'],
            ['name' => 'CASA CAMPESTRE'],
            ['name' => 'CONSULTORIO'],
            ['name' => 'FINCA'],
            ['name' => 'GARAJE'],
            ['name' => 'ISLA'],
            ['name' => 'LOCAL'],
            ['name' => 'LOTE'],
            ['name' => 'OFICINA'],
            ['name' => 'PENTHOUSE'],
        ]);
    }
}
