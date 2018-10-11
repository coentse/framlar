<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('banners')->insert([
            'positions'=>1,
            'name'=>'首页轮播图1',
            'link'=>'/',
            'sort_at'=>'100',
            'image'=>'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
            'state'=> 1,
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        ]);
        \Illuminate\Support\Facades\DB::table('banners')->insert([
            'positions'=>1,
            'name'=>'首页轮播图2',
            'link'=>'/',
            'sort_at'=>'100',
            'image'=>'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
            'state'=> 1,
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        ]);
        \Illuminate\Support\Facades\DB::table('banners')->insert([
            'positions'=>2,
            'name'=>'课程轮播图1',
            'link'=>'/',
            'sort_at'=>'100',
            'image'=>'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
            'state'=> 1,
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        ]);
        \Illuminate\Support\Facades\DB::table('banners')->insert([
            'positions'=>2,
            'name'=>'课程轮播图2',
            'link'=>'/',
            'sort_at'=>'100',
            'image'=>'http://file.duduapp.net/40/dd/40dd2634742268b8b94e1e4bacba1301.png',
            'state'=> 1,
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
