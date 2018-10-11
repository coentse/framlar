<?php

return [
//    'pay' => [
//        'pid'            => env('ALIPAY_PID'),
//        'app_id'         => env('ALIPAY_APP_ID'),
//        'private_key'    => env('ALIPAY_PRIVATE_KEY'),
//        'ali_public_key' => env('ALIPAY_ALI_PUBLIC_KEY'),
//    ],
    'yun' => [
        'oss_id'       => env('ALIYUN_ID', ''),
        'oss_key'      => env('ALIYUN_KEY', ''),
        'oss_endpoint' => env('ALIYUN_OSS_ENDPOINT', ''),
        'oss_bucket'   => env('ALIYUN_OSS_BUCKET', ''),
    ],
];
