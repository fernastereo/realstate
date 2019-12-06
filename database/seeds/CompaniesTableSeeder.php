<?php

use App\User;
use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 50)->create()->each(function($company){
            factory(User::class)
                ->times(10)
                ->create([
                    'company_id' => $company->id
                ]
            );
        });
    }
}
