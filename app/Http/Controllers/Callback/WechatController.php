<?php

namespace App\Http\Controllers\Callback;

use App\Http\Controllers\CallbackController;
use Illuminate\Http\Request;

// 微信回调基类
class WechatController extends CallbackController
{
    public function __construct()
    {
        parent::__construct();
    }
}
