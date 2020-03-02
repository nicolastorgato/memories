<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Memory;
use Faker\Generator as Faker;

$factory->define(Memory::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'name' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});
