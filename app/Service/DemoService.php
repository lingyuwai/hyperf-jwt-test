<?php

namespace App\Service;

use Hyperf\Di\Annotation\Inject;
use stdClass;
use Xingquzu\Hyperf\Service\AccessibleService;
use Xingquzu\Hyperf\Service\BaseService;

class DemoService extends BaseService
{
    /**
     * @Inject()
     * @var AccessibleService $accessible
     */
    protected $accessible;

    /**
     * Demo测试
     * @return array
     */
    public function demo(): array
    {
        return ['msg' => 'demo消息'];
    }

    /**
     * 登录演示
     * @return array
     */
    public function login(): array
    {
        $user = new stdClass();
        $user->id = 1;
        return $this->accessible->login($user);
    }
}