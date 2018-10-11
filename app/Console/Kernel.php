<?php

namespace App\Console;

use App\Console\Commands\ClientDocTool;
use App\Console\Commands\ManageDocTool;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ManageDocTool::class,
        ClientDocTool::class,

        \App\Console\Commands\Appc\CouponsCheck::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //->daily();//每日凌晨0点
        //->hourly();//每小时
        //->weekly(); 每周运行一次任务
        //->monthly(); 每月运行一次任务
        //->everyMinute();
        $schedule->command('coupons:check')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
