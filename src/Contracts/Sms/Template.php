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
 * 模板管理.
 */
interface Template
{
    /**
     * 添加模板
     */
    public function templateAdd(Params $params): Response;

    /**
     * 删除模板
     */
    public function templateDel(Params $params): Response;

    /**
     * 修改模板
     */
    public function templateModify(Params $params): Response;

    /**
     * 短信模板列表.
     */
    public function templateLst(Params $params): Response;
}
