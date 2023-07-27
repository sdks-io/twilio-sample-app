# Getting Started

```php
$gettingStartedController = $client->getGettingStartedController();
```

## Class Name

`GettingStartedController`

## Methods

* [Find Available Phone Numbers](../../doc/controllers/getting-started.md#find-available-phone-numbers)
* [Buy a Phone Number](../../doc/controllers/getting-started.md#buy-a-phone-number)
* [Send an SMS](../../doc/controllers/getting-started.md#send-an-sms)
* [List All Messages Sent From Your Twilio Number](../../doc/controllers/getting-started.md#list-all-messages-sent-from-your-twilio-number)


# Find Available Phone Numbers

To send an SMS with Twilio you'll first need to buy a phone number. For that you have to search the catalog of available phone numbers.

Once you have the list of available phone numbers, pick one and use it in the next request to buy the number.

Learn more about this in the [Twilio Docs](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource).

```php
function findAvailablePhoneNumbers(bool $smsEnabled, string $countryCode): OK
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `smsEnabled` | `bool` | Query, Required | Whether the phone numbers can receive text messages. Can be: `true` or `false`. |
| `countryCode` | `string` | Template, Required | (Required) The [ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code of the country from which to read phone numbers. |

## Response Type

[`OK`](../../doc/models/ok.md)

## Example Usage

```php
$smsEnabled = true;

$countryCode = 'US';

$result = $gettingStartedController->findAvailablePhoneNumbers(
    $smsEnabled,
    $countryCode
);
```

## Example Response *(as JSON)*

```json
{
  "available_phone_numbers": [
    {
      "address_requirements": "aute eiusmod",
      "beta": true,
      "capabilities": {},
      "friendly_name": "nisi do",
      "iso_country": "voluptate",
      "lata": "minim cillum",
      "latitude": 4649799.109687477,
      "locality": "in Duis ut anim irure",
      "longitude": -94614168.65959848,
      "phone_number": "amet labore",
      "postal_code": "deserunt esse cillum ut",
      "rate_center": "velit",
      "region": "ipsum pariatur cupidatat dolor"
    },
    {
      "address_requirements": "Ut",
      "beta": true,
      "capabilities": {},
      "friendly_name": "ullamco",
      "iso_country": "in incididunt",
      "lata": "cillum dolor velit sed",
      "latitude": -21235506.84035504,
      "locality": "sint",
      "longitude": -25668838.90140347,
      "phone_number": "non adipisicing enim incididunt deserunt",
      "postal_code": "ut voluptate minim",
      "rate_center": "velit aliqua",
      "region": "Excepteur aliquip in nisi"
    }
  ],
  "end": 3504435,
  "first_page_uri": "http://nnYdJBuOCqryvmKnbvBPBnaNMbCqrxw.tdvyHFVoZISsFUqJvqFT0cg+",
  "next_page_uri": "http://PoqRnDNQHgsSAILsyYutOtNGDj.qqhjm8TRty6qyZnDJAQcH1Djqzpuv,w5pf+hzR.4snyBz",
  "page": 90555719,
  "page_size": 88924560,
  "previous_page_uri": "https://ArZjnsEHjpSMJWeIOQAYyTOm.ispdr0ZozBph6JkyS4wCN4KsLijal5vGd-yowauXTc55dxOb",
  "start": -60781383,
  "uri": "http://BJmswSvlkWlnMst.fiODjnzufdg.eBwAEpkSmwiU.e-Ygm,OFGiH"
}
```


# Buy a Phone Number

Purchase a phone-number for your Twilio account. Afterwards you can use this number to send or receive SMS and calls.

Read more about it in the [Twilio Docs](https://www.twilio.com/docs/phone-numbers/api/incomingphonenumber-resource#create-an-incomingphonenumber-resource)

```php
function buyAPhoneNumber(string $phoneNumber): Created
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumber` | `string` | Form, Required | The phone number to purchase specified in [E.164](https://www.twilio.com/docs/glossary/what-e164) format.  E.164 phone numbers consist of a + followed by the country code and subscriber number without punctuation characters. For example, +14155551234. |

## Response Type

[`Created`](../../doc/models/created.md)

## Example Usage

```php
$phoneNumber = '+12513060906';

$result = $gettingStartedController->buyAPhoneNumber($phoneNumber);
```

## Example Response *(as JSON)*

```json
{
  "account_sid": "ACB6",
  "address_requirements": "foreign",
  "address_sid": "ADeA",
  "api_version": "reprehenderit laborum Excepteur",
  "beta": false,
  "bundle_sid": "BUB2",
  "capabilities": {},
  "date_created": "incididunt ad",
  "date_updated": "consequat nostrud non Excepteur",
  "emergency_address_sid": "ADAd",
  "emergency_status": "Inactive",
  "friendly_name": "Excepteur qui aute occaecat",
  "identity_sid": "RI4F",
  "origin": "ex sit non",
  "phone_number": "incididunt",
  "sid": "PNFd",
  "sms_application_sid": "APD1",
  "sms_fallback_method": "put",
  "sms_fallback_url": "https://sqnVhokvKfX.ggVS",
  "sms_method": "delete",
  "sms_url": "http://KvTTK.eixDOBAKnXDodC",
  "status": "Duis est",
  "status_callback": "https://lukPySBKCSJZRDfZeLGCQEJiiZlrSGtT.slbsog2f2Byb3SNOpnvFCnKiEUbexVWC5tK9Qaj0IFkIVhVKN+mNB826euAwsZOYNBGrdhphsN",
  "status_callback_method": "HEAD",
  "trunk_sid": "TK29",
  "uri": "http://efvlxkNPQlPFtoHjtYEM.qceW6gOSsyL5X8uZPGhiRrpPWucrUmJlQexyf4Dl9T7ahcoPDgC3k2TRG",
  "voice_application_sid": "AP5b",
  "voice_caller_id_lookup": true,
  "voice_fallback_method": "head",
  "voice_fallback_url": "https://YYJSXXIemHJDgyPulvPuSDhUfIJ.ofhsUNmlqzZSTo7nnhXYYLQgunn2ScfFWt4qoJ,M2zYA,",
  "voice_method": "PATCH",
  "voice_receive_mode": "voice",
  "voice_url": "https://lNOljQzheebolftPuuCa.qjzdVdF,m6lXjsq+rV4sijQkntubbHInkrQaJO2zBraF0"
}
```


# Send an SMS

Send a message from the account used to make the request with the phone number you purchased from Twilio in the previous step or with any other Twilio phone number you have associated in your account.

Read more about it in the [Twilio Docs](https://www.twilio.com/docs/sms/api/message-resource#create-a-message-resource)

```php
function sendAnSMS(string $body, string $to, string $from): Created1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | `string` | Form, Required | The text of the message you want to send. Can be up to 1,600 characters in length. |
| `to` | `string` | Form, Required | The destination phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format for SMS/MMS or [Channel user address](https://www.twilio.com/docs/sms/channels#channel-addresses) for other 3rd-party channels. |
| `from` | `string` | Form, Required | A Twilio phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format, an [alphanumeric sender ID](https://www.twilio.com/docs/sms/send-messages#use-an-alphanumeric-sender-id), or a [Channel Endpoint address](https://www.twilio.com/docs/sms/channels#channel-addresses) that is enabled for the type of message you want to send. Phone numbers or [short codes](https://www.twilio.com/docs/sms/api/short-code) purchased from Twilio also work here. You cannot, for example, spoof messages from a private cell phone number. If you are using `messaging_service_sid`, this parameter must be empty. |

## Response Type

[`Created1`](../../doc/models/created-1.md)

## Example Usage

```php
$body = 'Hello World!';

$to = '{{MY_PHONE_NUMBER}}';

$from = '{{TWILIO_PHONE_NUMBER}}';

$result = $gettingStartedController->sendAnSMS(
    $body,
    $to,
    $from
);
```

## Example Response *(as JSON)*

```json
{
  "account_sid": "ACF8",
  "api_version": "exercitation eiusmod amet laboris",
  "body": "consectetur exercitation officia magna",
  "date_created": "consectetur exercitation proident",
  "date_sent": "culpa sint labore",
  "date_updated": "proident",
  "direction": "outbound-call",
  "error_code": -64742646,
  "error_message": "nostrud sint Ut",
  "from": "Excepteur cillum aute",
  "messaging_service_sid": "MGDB",
  "num_media": "dolor veniam non",
  "num_segments": "et ut sint ut amet",
  "price": "Lorem reprehenderit",
  "price_unit": "Excepteur tempor i",
  "sid": "MM79",
  "status": "received",
  "subresource_uris": {},
  "to": "Ut non id",
  "uri": "magna sit esse"
}
```


# List All Messages Sent From Your Twilio Number

Retrieve a list of messages belonging to the account used to make the request. You can filter for example for only the messages that were sent from a specific phone number.

Read more about it in the [Twilio Docs](https://www.twilio.com/docs/sms/api/message-resource#read-multiple-message-resources)

```php
function listAllMessagesSentFromYourTwilioNumber(string $from): OK1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `from` | `string` | Query, Required | Read messages sent from only this phone number or alphanumeric sender ID. |

## Response Type

[`OK1`](../../doc/models/ok1.md)

## Example Usage

```php
$from = '{{TWILIO_PHONE_NUMBER}}';

$result = $gettingStartedController->listAllMessagesSentFromYourTwilioNumber($from);
```

## Example Response *(as JSON)*

```json
{
  "end": 51142961,
  "first_page_uri": "https://ZvltuXKxENEyvG.fnbzDIxrccIwHE6GxsyHjMd",
  "messages": [
    {
      "account_sid": "AC9E",
      "api_version": "commodo sint sunt eu",
      "body": "ut cillum",
      "date_created": "fugiat ipsum enim quis",
      "date_sent": "o",
      "date_updated": "laborum id esse elit",
      "direction": "outbound-reply",
      "error_code": 89665305,
      "error_message": "deserunt",
      "from": "anim esse",
      "messaging_service_sid": "MGC0",
      "num_media": "enim et",
      "num_segments": "quis qui ipsum",
      "price": "exercitation Duis",
      "price_unit": "consequat qu",
      "sid": "SMe5",
      "status": "scheduled",
      "subresource_uris": {},
      "to": "nulla",
      "uri": "cillum ut in irure"
    },
    {
      "account_sid": "ACD4",
      "api_version": "incididunt in non",
      "body": "deserunt incididunt irure eiusmod",
      "date_created": "sint ea",
      "date_sent": "Ut ut consectetur",
      "date_updated": "non dolore",
      "direction": "outbound-api",
      "error_code": -69524035,
      "error_message": "dolore Ut officia",
      "from": "reprehenderit",
      "messaging_service_sid": "MGEe",
      "num_media": "voluptate fugiat eiusmod qui Ut",
      "num_segments": "ea",
      "price": "consequat",
      "price_unit": "fugiat aliquip",
      "sid": "MM38",
      "status": "received",
      "subresource_uris": {},
      "to": "in tempor labore eiusmod",
      "uri": "elit non dol"
    }
  ],
  "next_page_uri": "http://fSikGpthYZQbOt.sncsPW4TzW44TkKnuDgx8f2FJz.",
  "page": -43897926,
  "page_size": 12121047,
  "previous_page_uri": "https://lSrGpSrECCMzKudcyRlwJdfhlnZEaAQ.hytgI,rCvOIy,x1C6vbgTvc9p6X2hkAdrqkd5jx8JKwJPiCrpsg2w",
  "start": -23084704,
  "uri": "https://USSzIQwA.hvxpmaT2476DlQGIi"
}
```

