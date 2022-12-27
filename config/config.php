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

use Hyperf\Contract\StdoutLoggerInterface;
use Psr\Log\LogLevel;

$isProd = env('APP_ENV') === env('APP_ENV_PROD');

return [
    'app_name' => env('APP_NAME', 'skeleton'),
    'app_env' => env('APP_ENV', 'dev'),
    'scan_cacheable' => env('SCAN_CACHEABLE', false),
    StdoutLoggerInterface::class => [
        'log_level' => $isProd ? [
            LogLevel::ALERT,
            LogLevel::CRITICAL,
            LogLevel::EMERGENCY,
            LogLevel::ERROR,
        ] : [
            // 警戒性错误: 必须被立即修改的错误
            LogLevel::ALERT,
            // 临界值错误: 超过临界值的错误，例如一天24小时，而输入的是25小时这样
            LogLevel::CRITICAL,
            //调试: 调试信息
            //LogLevel::DEBUG,
            // 严重错误: 导致系统崩溃无法使用
            LogLevel::EMERGENCY,
            // 一般错误: 一般性错误
            LogLevel::ERROR,
            // 信息: 程序输出信息
            LogLevel::INFO,
            // 通知: 程序可以运行但是还不够完美的错误
            LogLevel::NOTICE,
            // 警告性错误: 需要发出警告的错误
            LogLevel::WARNING,
        ],
    ],
];
