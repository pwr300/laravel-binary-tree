<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\{Node, NodeData};
use Faker\Generator as Faker;

$factory->define(Node::class, function (Faker $faker) {
    $data = factory(NodeData::class)->create();

    return [
        'left_node' => null,
        'right_node' => null,
    ];
});
