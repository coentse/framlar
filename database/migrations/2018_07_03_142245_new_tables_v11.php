<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class NewTablesV11 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 新媒体V1.1 新增数据表
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->nullable();
            $table->tinyInteger('category')->nullable()->comment('类别:1:代用券;2:抵扣券');
            $table->tinyInteger('type')->nullable()->comment('类型:1:课程;2:插件');
            $table->integer('item_id')->nullable()->comment('消耗优惠券的项目ID');
            $table->integer('expire')->nullable()->default(30)->comment('有效期，单位为天，默认30天');
            $table->integer('number')->nullable()->default(1)->comment('优惠券数量');
            $table->tinyInteger('status')->nullable()->default(1)->comment('是否有效：0-已使用、1-待使用、2-已失效');
            $table->timestamp('used_at')->nullable();
            $table->nullableTimestamps();
            $table->softDeletes();
        });
        Schema::create('dudu_beans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->comment('关联的用户id');
            $table->integer('bean_num')->default(0)->comment('嘟嘟豆数量');
            $table->tinyInteger('status')->default(1)->comment('状态：1-启用、0-冻结');
            $table->dateTime('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->index('member_id', 'inx_member_id');
        });
        Schema::create('dudu_beans_award', function (Blueprint $table) {
            $table->increments('id');
            $table->string('style', 128)->nullable()->comment('用户行为');
            $table->integer('award_num')->comment('奖励嘟嘟豆数量');
            $table->integer('limit_num')->nullable()->default(0)->comment('每日奖励上限.0表示无上限');
            $table->integer('multiple')->nullable()->default(1)->comment('奖励嘟嘟豆倍数');
            $table->nullableTimestamps();
            $table->softDeletes();
        });
        Schema::create('dudu_beans_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->comment('用户id');
            $table->integer('course_id')->nullable()->default(0)->comment('课程id,没有默认值为0');
            $table->integer('dudu_beans_change')->default(0)->comment('嘟嘟豆变化值');
            $table->tinyInteger('status')->nullable()->default(1)->comment('状态：1-增加嘟嘟豆、0-消耗嘟嘟豆');
            $table->string('type', 255)->comment('嘟嘟豆变化类型');
            $table->date('date_at')->nullable()->comment('创建日期');
            $table->nullableTimestamps();
            $table->softDeletes();
        });
        Schema::create('preview_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort_at')->default(0)->comment('排序');
            $table->string('title', 11)->comment('标题');
            $table->timestamp('time')->comment('上架时间');
            $table->integer('member_id')->comment('导师ID');
            $table->integer('limit_num')->comment('预约上限');
            $table->integer('reservation_num')->nullable()->comment('已预约人数');
            $table->string('thumb', 255)->comment('封面图');
            $table->string('image', 255)->comment('详情图');
            $table->string('introduce', 255);
            $table->nullableTimestamps();
            $table->softDeletes();
        });
        Schema::create('preview_course_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pre_id')->nullable()->comment('预约课程ID');
            $table->integer('member_id')->nullable()->comment('导师ID');
            $table->nullableTimestamps();
            $table->softDeletes();
        });
        Schema::create('member_jpush_registrationids', function (Blueprint $table) {
            $table->integer('member_id')->comment('用户ID');
            $table->tinyInteger('platform')->comment('平台 1:IOS,2:Android');
            $table->string('registrationid')->comment('推送标识id');
            $table->index('member_id');
        });
        Schema::create('member_umeng_registrationids', function (Blueprint $table) {
            $table->integer('member_id')->comment('用户ID');
            $table->tinyInteger('platform')->comment('平台 1:IOS,2:Android');
            $table->string('device_token')->comment('推送标识id');
            $table->index('member_id');
        });
        // 表注释
        DB::statement(" ALTER TABLE `coupons` comment'优惠券' ");
        DB::statement(" ALTER TABLE `dudu_beans` comment'嘟嘟豆主表' ");
        DB::statement(" ALTER TABLE `dudu_beans_award` comment'嘟嘟配置表' ");
        DB::statement(" ALTER TABLE `dudu_beans_detail` comment'嘟嘟详情表' ");
        DB::statement(" ALTER TABLE `preview_courses` comment'课程预告' ");
        DB::statement(" ALTER TABLE `preview_course_reservations` comment'用户课程预告关联表' ");
        DB::statement(" ALTER TABLE `member_jpush_registrationids` comment'绑定极光推送表' ");
        DB::statement(" ALTER TABLE `member_umeng_registrationids` comment'绑定友盟推送表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('dudu_beans');
        Schema::dropIfExists('dudu_beans_award');
        Schema::dropIfExists('dudu_beans_detail');
        Schema::dropIfExists('preview_courses');
        Schema::dropIfExists('preview_course_reservations');
        Schema::dropIfExists('member_jpush_registrationids');
        Schema::dropIfExists('member_umeng_registrationids');
    }
}
