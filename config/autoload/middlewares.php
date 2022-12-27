<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'http' => [
        //跨域
        \Xingquzu\Hyperf\Middleware\CorsMiddleware::class,

//        //API记录
//        PathMiddleware::class,

        //登录鉴权 是否登陆
        \Xingquzu\Hyperf\Middleware\AccessibleMiddleware::class,

//        //访问鉴权 是否有路由访问权限
//        AuthMiddleware::class,

        //参数校验
        \Xingquzu\Hyperf\Middleware\ValidatorMiddleware::class,

        //响应处理
        \Xingquzu\Hyperf\Middleware\ResponseMiddleware::class,
    ],
];
