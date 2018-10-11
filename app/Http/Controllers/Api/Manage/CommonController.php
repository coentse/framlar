<?php
/**
 * Created by PhpStorm.
 * User: guoenxie
 * Date: 2018/10/11
 */
namespace App\Http\Controllers\Api\Manage;

use App\Http\Controllers\Api\ManageController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class commonController extends ManageController
{
    /**
     * @api{get}/api/manage/doc/update       更新api文档
     * @apiName Common/doc
     * @apiGroup Common
     * @apiDescription     更新api文档
     */

    public function getApi(){
        Artisan::call('doc:make_manage');
        return redirect('/api/manage/doc/index.html');
    }

}