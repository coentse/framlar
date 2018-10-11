<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('users')->delete();
//        $admin = new \App\Models\User();
//        $admin->name = 'admin';
//        $admin->password = '123456';
//        $admin->mobile = '15890121887';
//        $admin->nickname = 'zhang_admin';
//        $admin->real_name = 'zhangxiaoyan';
//        $admin->state = 1;
//        $admin->created_at = \Carbon\Carbon::now()->toDateTimeString();
//        $admin->updated_at = \Carbon\Carbon::now()->toDateTimeString();
//        $admin->save();
//
//        $editor = new \App\Models\User();
//        $editor->name = 'editor';
//        $editor->password = '123456';
//        $editor->mobile = '15890121887';
//        $editor->nickname = 'zhang_editor';
//        $editor->real_name = 'zhangxiaoyan';
//        $editor->state = 1;
//        $editor->created_at = \Carbon\Carbon::now()->toDateTimeString();
//        $editor->updated_at = \Carbon\Carbon::now()->toDateTimeString();
//        $editor->save();

        factory(\App\Models\Member::class,15);
    }
}
