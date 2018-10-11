<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Course',2)->create(['course_type'=>1,'is_series'=>1,'c_id'=>1]);
        factory('App\Models\Course',2)->create(['course_type'=>1,'is_series'=>0,'c_id'=>1]);
        factory('App\Models\Course',2)->create(['course_type'=>2,'is_series'=>1,'c_id'=>1]);
        factory('App\Models\Course',2)->create(['course_type'=>2,'is_series'=>1,'c_id'=>1]);
    }
}
