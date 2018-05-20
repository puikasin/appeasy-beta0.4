<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Model\UnitProduct::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => $word,
        'slug' => str_slug($word),
        'group_id' => function () {
            return User::all()->random()->group_id;
        },
        'create_id' => function () {
            return User::all()->random();
        },
        'update_id' => function(){
            return User::all()->random();
        }
    ];
});
