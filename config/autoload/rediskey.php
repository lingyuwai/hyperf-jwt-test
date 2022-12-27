<?php
declare(strict_types=1);

//redis缓存键配置 所有的redis的key必须配置在这里进行管理 避免业务流程中定义出现含义相同的key

return [
    //用户登录授权Token
    'user_access_token' => 'user:access_token',

    //用户授权计数器
    'user_access_token_pool' => 'user:access_token:pool'
];