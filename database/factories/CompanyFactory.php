<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Company::class, function (Faker\Generator\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'website' => 'https://' . $faker->word . '.com',
        'email' => $faker->email,
    ];
});