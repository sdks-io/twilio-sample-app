<?php

declare(strict_types=1);

/*
 * TwilioMessagingSMSLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TwilioMessagingSMSLib;

use Core\Types\Sdk\CoreCallback;
use Core\Utils\CoreHelper;

class TwilioMessagingSMSClientBuilder
{
    /**
     * @var array
     */
    private $config = [];

    /**
     * @phan-suppress PhanEmptyPrivateMethod
     */
    private function __construct()
    {
    }

    public static function init(): self
    {
        return new self();
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }

    public function timeout(int $timeout): self
    {
        $this->config['timeout'] = $timeout;
        return $this;
    }

    public function enableRetries(bool $enableRetries): self
    {
        $this->config['enableRetries'] = $enableRetries;
        return $this;
    }

    public function numberOfRetries(int $numberOfRetries): self
    {
        $this->config['numberOfRetries'] = $numberOfRetries;
        return $this;
    }

    public function retryInterval(float $retryInterval): self
    {
        $this->config['retryInterval'] = $retryInterval;
        return $this;
    }

    public function backOffFactor(float $backOffFactor): self
    {
        $this->config['backOffFactor'] = $backOffFactor;
        return $this;
    }

    public function maximumRetryWaitTime(int $maximumRetryWaitTime): self
    {
        $this->config['maximumRetryWaitTime'] = $maximumRetryWaitTime;
        return $this;
    }

    public function retryOnTimeout(bool $retryOnTimeout): self
    {
        $this->config['retryOnTimeout'] = $retryOnTimeout;
        return $this;
    }

    /**
     * @param int[] $httpStatusCodesToRetry
     *
     * @return $this
     */
    public function httpStatusCodesToRetry(array $httpStatusCodesToRetry): self
    {
        $this->config['httpStatusCodesToRetry'] = $httpStatusCodesToRetry;
        return $this;
    }

    /**
     * @param string[] $httpMethodsToRetry
     *
     * @return $this
     */
    public function httpMethodsToRetry(array $httpMethodsToRetry): self
    {
        $this->config['httpMethodsToRetry'] = $httpMethodsToRetry;
        return $this;
    }

    public function environment(string $environment): self
    {
        $this->config['environment'] = $environment;
        return $this;
    }

    public function accountSid(string $accountSid): self
    {
        $this->config['accountSid'] = $accountSid;
        return $this;
    }

    public function username(string $username): self
    {
        $this->config['username'] = $username;
        return $this;
    }

    public function password(string $password): self
    {
        $this->config['password'] = $password;
        return $this;
    }

    public function httpCallback($httpCallback): self
    {
        if (!$httpCallback instanceof CoreCallback) {
            return $this;
        }
        $this->config['httpCallback'] = $httpCallback;
        return $this;
    }

    public function build(): TwilioMessagingSMSClient
    {
        return new TwilioMessagingSMSClient($this->config);
    }
}
