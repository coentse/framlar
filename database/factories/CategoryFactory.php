<?php

use Faker\Generator as Faker;

//$factory->define(\App\Models\Category::class, function (Faker $faker){
//    return [
//        'name'=>$faker->name,
//        'sort_at'=>100,
//        'state'=>1,
//        'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
//        'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
//    ];
//});

//$factory->define(\App\Models\News::class, function (Faker $faker){
//    return [
//        'title'=>$faker->name,
//        'sort_at'=>100,
//        'user_id'=>8,
//        'type'=>1,
//        'audio_url'=>'http://file.duduapp.net/fa/d3/fad38fcf3df8ffa5adbec573239ddd3e.jpeg',
//        'audio_text'=>'音频内容',
//        'introduce'=>'简介',
//        'description'=>'图文描述',
//        'is_recommend'=>1,
//        'state'=>1,
//        'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
//        'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
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
        'remember_token' => str_random(10),
        'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    ];
});
