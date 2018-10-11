<?php

// 后台接口
Route::namespace('Manage')->prefix('manage')->group(function(){
    Route::get('doc/update', 'CommonController@getApi');//api文档更新

});

// 客户端接口
Route::namespace('Client')->prefix('client')->group(function(){
    Route::get('doc/update', 'CommonController@getApi'); //api文档更新
});