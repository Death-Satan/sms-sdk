<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdk\Contracts\Sms;

use DeathSatan\SmsSdk\Contracts\Server\Params;
use DeathSatan\SmsSdk\Contracts\Server\Response;

/**
 * 短信发送约定.
 */
interface Send
{
    /**
     * 发送短信
     */
    public function smsSend(Params $params): Response;

    /**
     * 批量发送短信
     */
    public function smsBatchSend(Params $params): Response;
}
