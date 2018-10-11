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

//$factory->define(\App\Models\User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//        'remember_token' => str_random(10),
//
//    ];
//});

$factory->define(\App\Models\Member::class, function (Faker $faker) {
    return [
        'nickname' => $faker->name,
        'avatar' => 'http://wx.qlogo.cn/mmopen/eHEMOF2hOenLG6qNYAWlWgiaRrIZJADvsknQ9qDJ6pJibKic9I66XQRW2PTLr3raGPLD01Giatpe44ufzmv8C2hOrwWWWOYl1A3e/0',
        'role_id' => 1,
        'c_id' => 14,
        'mobile' => 15890121887,
        'real_name' => 'zhang',
        'company' => 'dudu',
        'positions' => 'php',
        'audio_url' => 'http://college-file.oss-cn-shanghai.aliyuncs.com/live/28915dcb5c4840bfa5375e90084314e7/mp3/2017-11-08-14%3A20%3A26_2017-11-08-14%3A33%3A27.mp3',
        'introduce' => '简介',
        'description' => '描述',
        'from' => 1,
        'state' => 0,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    ];
});