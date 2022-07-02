<?php

declare(strict_types=1);
/**
 * this file Author is Death-Satan.
 * Sms Manage
 * @homepage https://github.com/Death-Satan
 * @link https://github.com/Death-Satan/sms-sdk
 */
namespace DeathSatan\SmsSdk;

use DeathSatan\SmsSdk\Exceptions\SmsException;

class Manage
{
    /**
     * 配置项.
     */
    protected array $config = [
        'handle' => '',
        'options' => [
        ],
    ];

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @throws SmsException
     */
    public function getAdapter(): SmsAdapter
    {
        $adapter_name = $this->getAdapterName();
        $adapter = new $adapter_name($this->getAdapterConfig());
        if ($adapter instanceof SmsAdapter) {
            return $adapter;
        }
        throw new SmsException('This adapter does not inherit from the adapter class [' . $adapter_name . ']');
    }

    /**
     * 一些初始化的操作.
     */
    protected function initialize(): void
    {
    }

    /**
     * @throws SmsException
     */
    protected function getAdapterName(): string
    {
        $name = $this->config['handle'];
        if (class_exists($name)) {
            return $name;
        }
        throw new SmsException('sms adapter :[' . $name . '] exists');
    }

    /**
     * @throws SmsException
     */
    protected function getAdapterConfig(): array
    {
        $adapter_name = $this->getAdapterName();
        $config_name = $adapter_name;
        if (property_exists($adapter_name, 'config_name') && $adapter_name::$config_name !== null) {
            $config_name = $adapter_name::$config_name;
        }
        $options = $this->config['options'];
        if (empty($options[$config_name])) {
            throw new SmsException('No configuration found for this class [' . $adapter_name . ']');
        }
        return $options[$config_name];
    }
}
