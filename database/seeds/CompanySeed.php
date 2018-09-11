<?php

use Illuminate\Database\Seeder;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 10)->create()->each(function ($company) {
            $company->users()->save(factory(App\User::class)->make());
        });
    }
}
