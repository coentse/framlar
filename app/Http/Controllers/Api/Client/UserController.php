<?php
/**
 * Created by PhpStorm.
 * User: guoenxie
 * Date: 2018/10/11
 */
namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Api\ClientController;
use App\Models\User;
use Illuminate\Http\Request;

//用户管理
class UserController extends ClientController
{


    public function index(Request $request, User $user )
    {
        // todo...
    }

    public function show($id)
    {
        // todo...
    }

    public function update(Request $request, $id)
    {
        // todo...
    }
}