<?php

declare(strict_types=1);

/*
 * TwilioMessagingSMSLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TwilioMessagingSMSLib\Models;

use stdClass;

class Created1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountSid;

    /**
     * @var string
     */
    private $apiVersion;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $dateSent;

    /**
     * @var string
     */
    private $dateUpdated;

    /**
     * @var string
     */
    private $direction;

    /**
     * @var int
     */
    private $errorCode;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $messagingServiceSid;

    /**
     * @var string
     */
    private $numMedia;

    /**
     * @var string
     */
    private $numSegments;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $priceUnit;

    /**
     * @var string
     */
    private $sid;

    /**
     * @var string
     */
    private $status;

    /**
     * @var array
     */
    private $subresourceUris;

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $uri;

    /**
     * @param string $accountSid
     * @param string $apiVersion
     * @param string $body
     * @param string $dateCreated
     * @param string $dateSent
     * @param string $dateUpdated
     * @param string $direction
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $from
     * @param string $messagingServiceSid
     * @param string $numMedia
     * @param string $numSegments
     * @param string $price
     * @param string $priceUnit
     * @param string $sid
     * @param string $status
     * @param array $subresourceUris
     * @param string $to
     * @param string $uri
     */
    public function __construct(
        string $accountSid,
        string $apiVersion,
        string $body,
        string $dateCreated,
        string $dateSent,
        string $dateUpdated,
        string $direction,
        int $errorCode,
        string $errorMessage,
        string $from,
        string $messagingServiceSid,
        string $numMedia,
        string $numSegments,
        string $price,
        string $priceUnit,
        string $sid,
        string $status,
        array $subresourceUris,
        string $to,
        string $uri
    ) {
        $this->accountSid = $accountSid;
        $this->apiVersion = $apiVersion;
        $this->body = $body;
        $this->dateCreated = $dateCreated;
        $this->dateSent = $dateSent;
        $this->dateUpdated = $dateUpdated;
        $this->direction = $direction;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->from = $from;
        $this->messagingServiceSid = $messagingServiceSid;
        $this->numMedia = $numMedia;
        $this->numSegments = $numSegments;
        $this->price = $price;
        $this->priceUnit = $priceUnit;
        $this->sid = $sid;
        $this->status = $status;
        $this->subresourceUris = $subresourceUris;
        $this->to = $to;
        $this->uri = $uri;
    }

    /**
     * Returns Account Sid.
     */
    public function getAccountSid(): string
    {
        return $this->accountSid;
    }

    /**
     * Sets Account Sid.
     *
     * @required
     * @maps account_sid
     */
    public function setAccountSid(string $accountSid): void
    {
        $this->accountSid = $accountSid;
    }

    /**
     * Returns Api Version.
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * Sets Api Version.
     *
     * @required
     * @maps api_version
     */
    public function setApiVersion(string $apiVersion): void
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * Returns Body.
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Sets Body.
     *
     * @required
     * @maps body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * Returns Date Created.
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     *
     * @required
     * @maps date_created
     */
    public function setDateCreated(string $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns Date Sent.
     */
    public function getDateSent(): string
    {
        return $this->dateSent;
    }

    /**
     * Sets Date Sent.
     *
     * @required
     * @maps date_sent
     */
    public function setDateSent(string $dateSent): void
    {
        $this->dateSent = $dateSent;
    }

    /**
     * Returns Date Updated.
     */
    public function getDateUpdated(): string
    {
        return $this->dateUpdated;
    }

    /**
     * Sets Date Updated.
     *
     * @required
     * @maps date_updated
     */
    public function setDateUpdated(string $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * Returns Direction.
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * Sets Direction.
     *
     * @required
     * @maps direction
     */
    public function setDirection(string $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * Returns Error Code.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     *
     * @required
     * @maps error_code
     */
    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Message.
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * Sets Error Message.
     *
     * @required
     * @maps error_message
     */
    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns From.
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * Sets From.
     *
     * @required
     * @maps from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns Messaging Service Sid.
     */
    public function getMessagingServiceSid(): string
    {
        return $this->messagingServiceSid;
    }

    /**
     * Sets Messaging Service Sid.
     *
     * @required
     * @maps messaging_service_sid
     */
    public function setMessagingServiceSid(string $messagingServiceSid): void
    {
        $this->messagingServiceSid = $messagingServiceSid;
    }

    /**
     * Returns Num Media.
     */
    public function getNumMedia(): string
    {
        return $this->numMedia;
    }

    /**
     * Sets Num Media.
     *
     * @required
     * @maps num_media
     */
    public function setNumMedia(string $numMedia): void
    {
        $this->numMedia = $numMedia;
    }

    /**
     * Returns Num Segments.
     */
    public function getNumSegments(): string
    {
        return $this->numSegments;
    }

    /**
     * Sets Num Segments.
     *
     * @required
     * @maps num_segments
     */
    public function setNumSegments(string $numSegments): void
    {
        $this->numSegments = $numSegments;
    }

    /**
     * Returns Price.
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @required
     * @maps price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Price Unit.
     */
    public function getPriceUnit(): string
    {
        return $this->priceUnit;
    }

    /**
     * Sets Price Unit.
     *
     * @required
     * @maps price_unit
     */
    public function setPriceUnit(string $priceUnit): void
    {
        $this->priceUnit = $priceUnit;
    }

    /**
     * Returns Sid.
     */
    public function getSid(): string
    {
        return $this->sid;
    }

    /**
     * Sets Sid.
     *
     * @required
     * @maps sid
     */
    public function setSid(string $sid): void
    {
        $this->sid = $sid;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Subresource Uris.
     */
    public function getSubresourceUris(): array
    {
        return $this->subresourceUris;
    }

    /**
     * Sets Subresource Uris.
     *
     * @required
     * @maps subresource_uris
     */
    public function setSubresourceUris(array $subresourceUris): void
    {
        $this->subresourceUris = $subresourceUris;
    }

    /**
     * Returns To.
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @required
     * @maps to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Uri.
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Sets Uri.
     *
     * @required
     * @maps uri
     */
    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['account_sid']           = $this->accountSid;
        $json['api_version']           = $this->apiVersion;
        $json['body']                  = $this->body;
        $json['date_created']          = $this->dateCreated;
        $json['date_sent']             = $this->dateSent;
        $json['date_updated']          = $this->dateUpdated;
        $json['direction']             = $this->direction;
        $json['error_code']            = $this->errorCode;
        $json['error_message']         = $this->errorMessage;
        $json['from']                  = $this->from;
        $json['messaging_service_sid'] = $this->messagingServiceSid;
        $json['num_media']             = $this->numMedia;
        $json['num_segments']          = $this->numSegments;
        $json['price']                 = $this->price;
        $json['price_unit']            = $this->priceUnit;
        $json['sid']                   = $this->sid;
        $json['status']                = $this->status;
        $json['subresource_uris']      = $this->subresourceUris;
        $json['to']                    = $this->to;
        $json['uri']                   = $this->uri;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
