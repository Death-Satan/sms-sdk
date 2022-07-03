<?php

namespace DeathSatan\SmsSdkTest\Cases;

use DeathSatan\SmsSdk\Contracts\Server\Params;
use DeathSatan\SmsSdk\Contracts\Server\Response;
use DeathSatan\SmsSdk\SmsAdapter;

class SmsAdapterTest extends AbstractTestCase
{
    protected function adapter()
    {
        return \Mockery::mock(SmsAdapter::class);
    }

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
}