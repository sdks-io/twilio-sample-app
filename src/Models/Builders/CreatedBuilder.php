<?php

declare(strict_types=1);

/*
 * TwilioMessagingSMSLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TwilioMessagingSMSLib\Models\Builders;

use Core\Utils\CoreHelper;
use TwilioMessagingSMSLib\Models\Created;

/**
 * Builder for model Created
 *
 * @see Created
 */
class CreatedBuilder
{
    /**
     * @var Created
     */
    private $instance;

    private function __construct(Created $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new created Builder object.
     */
    public static function init(
        string $accountSid,
        string $addressRequirements,
        string $addressSid,
        string $apiVersion,
        bool $beta,
        string $bundleSid,
        array $capabilities,
        string $dateCreated,
        string $dateUpdated,
        string $emergencyAddressSid,
        string $emergencyStatus,
        string $friendlyName,
        string $identitySid,
        string $origin,
        string $phoneNumber,
        string $sid,
        string $smsApplicationSid,
        string $smsFallbackMethod,
        string $smsFallbackUrl,
        string $smsMethod,
        string $smsUrl,
        string $status,
        string $statusCallback,
        string $statusCallbackMethod,
        string $trunkSid,
        string $uri,
        string $voiceApplicationSid,
        bool $voiceCallerIdLookup,
        string $voiceFallbackMethod,
        string $voiceFallbackUrl,
        string $voiceMethod,
        string $voiceReceiveMode,
        string $voiceUrl
    ): self {
        return new self(new Created(
            $accountSid,
            $addressRequirements,
            $addressSid,
            $apiVersion,
            $beta,
            $bundleSid,
            $capabilities,
            $dateCreated,
            $dateUpdated,
            $emergencyAddressSid,
            $emergencyStatus,
            $friendlyName,
            $identitySid,
            $origin,
            $phoneNumber,
            $sid,
            $smsApplicationSid,
            $smsFallbackMethod,
            $smsFallbackUrl,
            $smsMethod,
            $smsUrl,
            $status,
            $statusCallback,
            $statusCallbackMethod,
            $trunkSid,
            $uri,
            $voiceApplicationSid,
            $voiceCallerIdLookup,
            $voiceFallbackMethod,
            $voiceFallbackUrl,
            $voiceMethod,
            $voiceReceiveMode,
            $voiceUrl
        ));
    }

    /**
     * Initializes a new created object.
     */
    public function build(): Created
    {
        return CoreHelper::clone($this->instance);
    }
}
