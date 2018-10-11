<?php
/**
 * Created by PhpStorm.
 * User: guoenxie
 * Date: 2018/10/11
 */
namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Api\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommonController extends ClientController
{
    /**
     * @api{get}/api/client/doc/update       更新api文档
     * @apiName ClientApiDoc/doc
     * @apiGroup ClientApiDoc
     * @apiDescription     更新api文档
     */
    public function getApi(){
        Artisan::call('doc:make_client');
        return redirect('/api/client/doc/index.html');
    }
}
