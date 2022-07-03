<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdk;

use DeathSatan\SmsSdk\Contracts\Server\Params;
use DeathSatan\SmsSdk\Contracts\Server\Response;
use DeathSatan\SmsSdk\Contracts\Sms\Query;
use DeathSatan\SmsSdk\Contracts\Sms\Send;
use DeathSatan\SmsSdk\Contracts\Sms\Sign;
use DeathSatan\SmsSdk\Contracts\Sms\Template;

if (! class_exists(Manage::class)) {
    class Manage implements Query, Send, Template, Sign
    {
        public function queryStatistics(Params $params): Response
        {
            // TODO: Implement queryStatistics() method.
        }

        public function queryDetail(Params $params): Response
        {
            // TODO: Implement queryDetail() method.
        }

        public function smsSend(Params $params): Response
        {
            // TODO: Implement smsSend() method.
        }

        public function smsBatchSend(Params $params): Response
        {
            // TODO: Implement smsBatchSend() method.
        }

        public function signAdd(Params $params): Response
        {
            // TODO: Implement signAdd() method.
        }

        public function signDel(Params $params): Response
        {
            // TODO: Implement signDel() method.
        }

        public function signModify(Params $params): Response
        {
            // TODO: Implement signModify() method.
        }

        public function signLst(Params $params): Response
        {
            // TODO: Implement signLst() method.
        }

        public function signStatus(Params $params): Response
        {
            // TODO: Implement signStatus() method.
        }

        public function templateAdd(Params $params): Response
        {
            // TODO: Implement templateAdd() method.
        }

        public function templateDel(Params $params): Response
        {
            // TODO: Implement templateDel() method.
        }

        public function templateModify(Params $params): Response
        {
            // TODO: Implement templateModify() method.
        }

        public function templateLst(Params $params): Response
        {
            // TODO: Implement templateLst() method.
        }
    }
}
