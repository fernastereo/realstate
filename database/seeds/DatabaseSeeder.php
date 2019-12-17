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
        $this->call(CompaniesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AdsstatusTableSeeder::class);
        $this->call(PropertytypesTableSeeder::class);
        $this->call(DestinationstypesTableSeeder::class);
        $this->call(PeriodstypesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PhysicalstatusTableSeeder::class);
        $this->call(SocialstratumsTableSeeder::class);
        $this->call(NeighborhoodsTableSeeder::class);
    }
}
