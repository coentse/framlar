<?php

namespace App\Http\Controllers\Callback\Wechat;

use App\Http\Controllers\CallbackController;
use Illuminate\Http\Request;

// 微信开放平台回调
class OpenController extends CallbackController
{
    public function __construct()
    {
        parent::__construct();
    }

    //
    public function serve(){
        return 'test';
    }
}
