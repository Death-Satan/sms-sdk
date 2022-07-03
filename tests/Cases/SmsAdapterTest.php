<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdkTest\Cases;

use DeathSatan\SmsSdk\Contracts\Server\Params;
use DeathSatan\SmsSdk\Contracts\Server\Response;
use DeathSatan\SmsSdk\SmsAdapter;

/**
 * @internal
 * @coversNothing
 */
class SmsAdapterTest extends AbstractTestCase
{
    public function testSendContact()
    {
        $adapter = $this->adapter();
        $send_params = \Mockery::mock(Params::class);
        $server_response = \Mockery::mock(Response::class);
        $adapter->allows()
            ->smsSend($send_params)
            ->andReturn($server_response);

        $this->assertTrue($adapter->smsSend($send_params) instanceof Response);

        $adapter->allows()
            ->smsBatchSend($send_params)
            ->andReturn($server_response);

        $this->assertTrue($adapter->smsBatchSend($send_params) instanceof Response);
    }

    protected function adapter()
    {
        return \Mockery::mock(SmsAdapter::class);
    }
}
