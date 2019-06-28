<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\NodeData;
use Faker\Generator as Faker;

$factory->define(NodeData::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'credits_left' => mt_rand(1, 10000),
        'credits_right' => mt_rand(1, 10000)
    ];
});
