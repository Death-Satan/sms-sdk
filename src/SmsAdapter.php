<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdk;

use DeathSatan\SmsSdk\Contracts\Sms\Send;

abstract class SmsAdapter implements Send
{
    /**
     * 你的adapter配置名.
     */
    public static ?string $config_name = null;

    /**
     * 配置.
     */
    protected array $config = [];

    public function __construct(array $config = [])
    {
        $this->config = $config;

        $this->initialize();
    }

    /**
     * 当一切准备好后会执行此方法.
     */
    protected function initialize(): void
    {
    }
}
