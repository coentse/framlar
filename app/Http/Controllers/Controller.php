<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    }

    // 返回JSON
    public function json($data = [], $errcode = 0, $message = 'success'){
        return response()->json(array_merge([
            'errcode' => $errcode,
            'message' => $message,
        ], $data));

    }
}
