<?php
/**
 * Created by PhpStorm.
 * User: guoenxie
 * Date: 2018/10/11
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

// 后端接口基类
class ManageController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }
}
