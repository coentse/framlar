<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ManageDocTool extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:make_manage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '后台接口文档生成';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $command = system("apidoc -i ".base_path()."/app/Http/Controllers/Api/Manage/  -o ".base_path()."/public/manage/doc");
        $this->info($command);
    }
}
