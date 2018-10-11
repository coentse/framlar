<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Chapter::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'member_id' => 1,
        'introduction' => 'introduction',
        'introduce' => 'introduce',
        'image' => 'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
    ];
});
