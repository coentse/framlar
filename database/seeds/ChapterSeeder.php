<?php

use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Chapter',2)->create(['course_id'=>1,'chapter_type'=>'1','media_type'=>'1','media_url'=>'http://file.duduapp.net/fa/d3/fad38fcf3df8ffa5adbec573239ddd3e.jpeg']);
        factory('App\Models\Chapter',2)->create(['course_id'=>1,'chapter_type'=>'1','media_type'=>'2','media_url'=>'http://file.duduapp.net/fa/d3/fad38fcf3df8ffa5adbec573239ddd3e.jpeg']);
    }
}
