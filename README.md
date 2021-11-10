# Email Normalizer
This library will normalize email addresses for cases when different email addresses all point towards a single email account.
For example `user.name+whatever@gmail.com` points to `username@gmail.com`.
This is useful for cases such as when you want to limit a single user using a single email account to signup using different email addresses.

[![Packagist Version](https://img.shields.io/packagist/v/Gabrola/email-normalizer)](https://packagist.org/packages/gabrola/email-normalizer)
[![Packagist Downloads](https://img.shields.io/packagist/dt/Gabrola/email-normalizer)](https://packagist.org/packages/gabrola/email-normalizer)
[![Codecov](https://img.shields.io/codecov/c/github/Gabrola/email-normalizer)](https://app.codecov.io/gh/Gabrola/email-normalizer)
[![GitHub license](https://img.shields.io/github/license/Gabrola/email-normalizer)](https://github.com/Gabrola/email-normalizer/blob/master/LICENSE)

### Installation
```shell script
composer require gabrola/email-normalizer
```

### Usage
```php
<?php
use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRules;

$emailNormalizer = new EmailNormalizer(new EmailRules());
$normalizedEmail = $emailNormalizer->normalize('username+whatever@gmail.com');

echo $normalizedEmail; //Returns username@gmail.com
```

### Rule Types

- Plus Tags: `username+tag@gmail.com` normalizes as `username@gmail.com`
- Hyphen Tags: `username-tag@yahoo.com` normalizes as `username@yahoo.com`
- Dots: `first.last@gmail.com` normalizes as `firstlast@gmail.com`
- Subdomain Addressing: `whatever@username.fastmail.com` normalizes as `username@fastmail.com`
- Aliases: `username@googlemail.com` normalizes as `username@gmail.com`

### Providers

 - Gmail
 - Outlook
 - Yahoo
 - Fastmail
 - Apple iCloud
 - Yandex
 - Mail.ru
 - ProtonMail
