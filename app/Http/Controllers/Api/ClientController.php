<?php
/**
 * Created by PhpStorm.
 * User: guoenxie
 * Date: 2018/10/11
 */
namespace App\Http\Controllers\Api;
use App\Http\Controllers\ApiController;

//客户端接口基类
class ClientController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }

}
