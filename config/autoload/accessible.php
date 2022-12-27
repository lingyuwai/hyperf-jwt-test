<?php
/**
 * 授权认证
 */

return [
    //登录授权类
    'class' => \Xingquzu\Hyperf\Service\AccessibleService::class,

    //认证私钥
    'secret' => env('AUTH_SECRET', ''),

    //Token过期时间(秒)
    'ttl' => env('AUTH_TTL', 3600),

    //允许同时登录的终端个数
    'terminals' => env('AUTH_TERMINALS', 3)
];