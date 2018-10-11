<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'real_price' => 12,
        'price' => 0.01,
        'labels_id' => 1,
        'introduce' => '简介',
        'is_index_recommend' => 1,
        'is_cover_recommend' => 1,
        'image' => 'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
    ];
});
