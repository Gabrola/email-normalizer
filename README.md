# EmailNormalizer
This library that will normalize email addresses for cases when different email addresses all point towards a single email account.

For example, Gmail will ignore dots and anything after a plus sign in an email address so `user.name+anything@gmail.com` is the same as `username@gmail.com`.

By default the following normalization rules are implemented:

| Email Domain   | Rules                                                                                                        |
|----------------|--------------------------------------------------------------------------------------------------------------|
| gmail.com      | <ul><li>Replace dots</li><li>Remove plus sign suffix</li></ul>                                               |
| googlemail.com | <ul><li>Replace dots</li><li>Remove plus sign suffix</li><li>Replace googlemail.com with gmail.com</li></ul> |
| live.com       | <ul><li>Replace dots</li><li>Remove plus sign suffix</li></ul>                                               |
| hotmail.com    | <ul><li>Remove plus sign suffix</li></ul>                                                                    |
| outlook.com    | <ul><li>Remove plus sign suffix</li></ul>                                                                    |

### Install Using Composer
```shell script
composer require gabrola/email-normalizer
```

### Usage
```php
<?php
use Gabrola\EmailNormalizer\EmailNormalizer;

$emailNormalizer = new EmailNormalizer();
$normalizedEmail = $emailNormalizer->normalize('test+gmail@gmail.com');

echo $normalizedEmail; //Returns test@gmail.com
```