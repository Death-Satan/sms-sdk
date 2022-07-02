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

interface Query
{
    /**
     * 查询短信发送统计信息.
     */
    public function queryStatistics(Params $params): Response;

    /**
     * 查询短信发送记录和发送状态
     */
    public function queryDetail(Params $params): Response;
}
