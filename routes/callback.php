<?php

// 回调接口
Route::namespace('Wechat')->prefix('wechat')->group(function(){
    Route::any('open/serve','OpenController@serve');
});
