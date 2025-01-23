# Configuration

> Here we want to explain to you the configuration of the settings of a <mark>LiveProto Client</mark>

---

## Settings

First of all, you need to adjust its settings to your liking

```php
use Tak\Liveproto\Utils\Settings;

$settings = new Settings();


/* Telegram Settings */
$settings->setApiId(29784714);
$settings->setApiHash('143dfc3c92049c32fbc553de2e5fb8e4');
$settings->setDeviceModel('PC 64bit');
$settings->setSystemVersion('4.14.186');
$settings->setAppVersion('1.28.5');
$settings->setSystemLangCode('en-US');
$settings->setLangPack('android');
$settings->setLangCode('en-US');


/* LiveProto Settings (optional) */
$settings->setFloodSleepThreshold(120);
$settings->setReceiveUpdates(false);
$settings->setIPv6(true);
$settings->setTestMode(false);
$settings->setDC(1);
$settings->setProtocol(Tak\Liveproto\Enums\ProtocolType::TcpFull);
$settings->setProxy(type :  'socks5',address : '127.0.0.1:443',username : 'ProxyUser',password : 'ProxyPassword');
$settings->setOfficial(true);
$settings->setSaveTime(3);
$settings->setHideLog(false);
$settings->setMaxSizeLog(100 * 1024 * 1024);
$settings->setPathLog('Liveproto.log');


/* If you want to use MySQL */
$settings->setServer('localhost');
$settings->setUsername('Username');
$settings->setPassword('Password');
$settings->setDatabase('DatabaseName');
```

---

## API ID

- Type : `Integer` <kbd style="color : red">required</kbd>
- Default : `21724`

If this parameter is not set, the api id of an official client is used by default, The API ID you obtained from https://my.telegram.org

!> If your client is not [official](en/configuration.md#Official), using the **API ID** of an [official](en/configuration.md#Official) client is dangerous

## API HASH

- Type : `String` <kbd style="color : red">required</kbd>
- Default : `3e0cb5efcd52300aec5994fdfc5bdc16`

If this parameter is not set, the api hash of an official client is used by default, The API HASH you obtained from https://my.telegram.org

!> If your client is not [official](en/configuration.md#Official), using the **API HASH** of an [official](en/configuration.md#Official) client is dangerous

## Device Model

- Type : `String` <kbd>optional</kbd>
- Default : `$OperatingSystemName`

Defaults to php_uname('s')

## System Version

- Type : `String` <kbd>optional</kbd>
- Default : `$ReleaseName`

Defaults to php_uname('r')

## App Version

- Type : `String` <kbd>optional</kbd>
- Default : `0.26.8.1721-universal`

Default is an official app version

## System Lang Code

- Type : `String` <kbd>optional</kbd>
- Default : `$Locale`

If the intl extension is enable, it will be used, otherwise the default value is 'en-US'

## Lang Pack

- Type : `String` <kbd>optional</kbd>
- Default : `android`

!> **If you want to use this feature, you must have an [official](en/configuration.md#Official) client !**

## Lang Code

- Type : `String` <kbd>optional</kbd>
- Default : `$Locale`

If the intl extension is enable, it will be used, otherwise the default value is 'en'

## Flood Sleep Threshold

- Type : `Integer` <kbd>optional</kbd>
- Default : `120`

If you encounter a FLOOD error, and if it is less than the set value, it will resend the request after X seconds, and if the flood wait time is more than the set time, you will get an error

## Receive Updates

- Type : `Boolean` <kbd>optional</kbd>
- Default : `True`

If this parameter is set to false,use invokeWithoutUpdates(query = initConnection), If you give false value, your session will no longer receive updates

## IPv6

- Type : `Boolean` <kbd>optional</kbd>
- Default : `False`

If its value is false, it uses Telegram IP version 4 (ipv4), and if it is true, it uses Telegram IP version 6 (ipv6)

!> Note, You cannot change it later ! For the first time, everything you set is no longer changeable

## Test Mode

- Type : `Boolean` <kbd>optional</kbd>
- Default : `False`

If this parameter is set to true, you will be connected to Telegram's test servers

## DC

- Type : `Integer` <kbd>optional</kbd>
- Default : `0 | Random`

Enter the number of the data center you want to connect to

## Protocol

- Type : `ProtocolType` <kbd>optional</kbd>
- Default : `ProtocolType::FULL`

Set the tcp connection [`protocol`](en/enums.md#ProtocolType)

## Proxy

- Type : `...string` <kbd>optional</kbd>

You must pass `type` and `address` arguments and `username` and `password` parameters are optional

!> Possible values ​​for the type parameter : `SOCKS5` , `HTTP`

## Official

- Type : `Boolean` <kbd>optional</kbd>
- Default : `False`

It uses information from Telegram X to create an official client for you

## Save Time

- Type : `Integer | Float` <kbd>optional</kbd>
- Default : `3`

The value is in seconds and after this time your information is saved in the database

## Hide Log

- Type : `Boolean` <kbd>optional</kbd>
- Default : `False`

If its value is true, then no more logs will be printed

## Max Size Log

- Type : `Integer` <kbd>optional</kbd>
- Default : `0x6400000 | 100MB`

This parameter must be given in bytes, if the size of your log file reaches this value, it will be deleted automatically

## Path Log

- Type : `String` <kbd>optional</kbd>
- Default : `Liveproto.log`

You can set the log file path in which file the logs are saved

### Server

- Type : `Integer` <kbd>optional</kbd>
- Default : `localhost`

The IP of the server on which the database is to be set

### Username

- Type : `String` <kbd style="color : red">required</kbd>

Your database username

### Password

- Type : `String` <kbd style="color : red">required</kbd>

Your database password

### Database

- Type : `String` <kbd>optional</kbd>
- Default : `$Username`

Your database name, By default, the database username value is set for it