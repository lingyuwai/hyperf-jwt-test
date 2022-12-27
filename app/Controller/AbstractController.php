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
namespace App\Controller;

use Hyperf\Context\Context;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    /**
     * @Inject
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * 是否需要登录
     * @var bool
     */
    public $needToken = true;

    /**
     * 授权信息
     * @return array
     */
    protected function accessible(): array
    {
        return [
            '@' => [], //强制登录
            '?' => [], //不用登录
            '*' => [], //登录与不登录即可
        ];
    }

    /**
     * 获取当前页码
     * @return int
     */
    public function getPage(): int
    {
        return (int)Context::get('g_page');
    }

    /**
     * 单页数据量
     * @return int
     */
    public function getPageSize(): int
    {
        return (int)Context::get('g_size');
    }

    /**
     * 执行不能访问的对象方法
     * @param string $name
     * @param $arguments
     * @return mixed
     */
    public function __call(string $name, $arguments)
    {
        return $this->$name();
    }
}
