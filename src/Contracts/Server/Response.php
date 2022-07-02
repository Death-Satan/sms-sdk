<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdk\Contracts\Server;

/**
 * 服务端返回接口消息契约.
 */
interface Response
{
    /**
     * 获取服务端的状态码
     */
    public function code(): int;

    /**
     * 获取本次操作是否成功或者失败.
     */
    public function status(): bool;

    /**
     * 获取服务端返回的response中的data.
     */
    public function data(): array;

    /**
     * 服务端headers.
     */
    public function headers(): array;
}
