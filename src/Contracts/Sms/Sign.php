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

interface Sign
{
    /**
     * 申请短信签名.
     */
    public function signAdd(Params $params): Response;

    /**
     * 删除短信签名.
     */
    public function signDel(Params $params): Response;

    /**
     * 修改短信签名.
     */
    public function signModify(Params $params): Response;

    /**
     * 短信签名列表.
     */
    public function signLst(Params $params): Response;

    /**
     * 查询短信签名状态
     */
    public function signStatus(Params $params): Response;
}
