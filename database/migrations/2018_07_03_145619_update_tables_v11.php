<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablesV11 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 新媒体V1.1 数据表更新
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('coupon_id')->default(0)->after('pay_time')->comment('优惠券ID');
            $table->decimal('coupon_price', 10, 2)->default(0.00)->after('coupon_id')->comment('代金券/嘟嘟豆等抵扣金额');
            $table->tinyInteger('coupon_type')->default(0)->after('coupon_price')->comment('抵扣金额类型：1-嘟嘟豆、2-代金券、...');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->tinyInteger('pre_id')->default(0)->after('course_type')->comment('预约课程ID');
            $table->integer('view_num')->default(0)->after('collection_num')->comment('浏览量');
        });
        Schema::table('members', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->after('state')->comment('用户信息是否完善：0-不完善，1-完善');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('coupon_id');
            $table->dropColumn('coupon_price');
            $table->dropColumn('coupon_type');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('pre_id');
            $table->dropColumn('view_num');
        });
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
