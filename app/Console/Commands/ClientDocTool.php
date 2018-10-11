<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClientDocTool extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:make_client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '客户端接口文档';

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
        $command = system("apidoc -i ".base_path()."/app/Http/Controllers/Api/Client/  -o ".base_path()."/public/client/doc");
        $this->info($command);
    }
}
