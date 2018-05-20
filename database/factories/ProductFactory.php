<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\CategoryProduct;
use App\Model\UnitProduct;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'barcode' => str_random(20),
        'name' => $word,
        'slug' => str_slug($word),
        'qty' => 50,
        'qty_limit' => 1,
        'costs' => 1000,
        'price' => 1000,
        'category_id' => function () {
            return CategoryProduct::all()->random();
        },
        'unit_id' => function () {
            return UnitProduct::all()->random();
        },
        'input' => $faker->word,
        'detail' => $faker->word,
        'group_id' => function () {
            return User::all()->random()->group_id;
        },
        'create_id' => function () {
            return User::all()->random();
        },
        'update_id' => function () {
            return User::all()->random();
        },
        'image' => 'user.jpg'
    ];
});
