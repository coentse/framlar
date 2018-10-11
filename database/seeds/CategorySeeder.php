<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory('App\Models\Category',4)->create(['type'=>1]);
//        factory('App\Models\Category',4)->create(['type'=>2]);
//        factory('App\Models\Category',4)->create(['type'=>3]);
//        factory('App\Models\Category',4)->create(['type'=>4]);
//        factory('App\Models\Category',4)->create(['type'=>5]);

//        factory('App\Models\News',15)->create([
//            'c_id'=>9,
//        ]);
//        factory('App\Models\News',8)->create([
//            'c_id'=>10,
//        ]);
        factory(\App\Models\Member::class,15)->create();


//        \Illuminate\Support\Facades\DB::table('members')->insert([
//            'nickname' => '导师4',
//            'avatar' => 'http://wx.qlogo.cn/mmopen/eHEMOF2hOenLG6qNYAWlWgiaRrIZJADvsknQ9qDJ6pJibKic9I66XQRW2PTLr3raGPLD01Giatpe44ufzmv8C2hOrwWWWOYl1A3e/0',
//            'role_id' => 1,
//            'c_id' => 14,
//            'mobile' => 15890121887,
//            'real_name' => 'zhang',
//            'company' => 'dudu',
//            'positions' => 'php',
//            'audio_url' => 'http://college-file.oss-cn-shanghai.aliyuncs.com/live/28915dcb5c4840bfa5375e90084314e7/mp3/2017-11-08-14%3A20%3A26_2017-11-08-14%3A33%3A27.mp3',
//            'introduce' => '简介',
//            'description' => '描述',
//            'from' => 1,
//            'state' => 0,
//            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
//            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
//        ]);
    }
}
