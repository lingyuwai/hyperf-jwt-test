<?php

declare(strict_types=1);
/**
 * 框架Demo
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Service\DemoService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Xingquzu\Hyperf\Exception\MException;

/**
 * @AutoController()
 */
class DemoController extends AbstractController
{
    /**
     * @Inject()
     * @var DemoService $demoService
     */
    private $demoService;

    /**
     * 自动验证器演示
     * 自动验证器 需在app/Validator目录下建立与当前类与方法同名的Validator类文件
     * @return array
     */
    public function index(): array
    {
        return [
            'page' => $this->getPage(),
            'size' => $this->getPageSize(),
            'request' => $this->request->all(),
            'data' => $this->demoService->demo()
        ];
    }

    /**
     * 异常演示
     * @return array
     */
    public function test(): array
    {
        return $this->demoService->login();
        return ['exception'=>$this->needToken, '整体要登陆，但我不用登陆'];
        throw new MException('异常测试消息');
    }

    /**
     * 登录权限配置
     * @return array
     */
    protected function accessible(): array
    {
        return [
            '@' => ['index'], //强制登录
            '?' => ['test'], //不用登录'
        ];
    }
}
