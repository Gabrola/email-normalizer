<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Tests;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\Tests\Stubs\TestRules;
use Generator;
use PHPUnit\Framework\TestCase;

/**
 * Class EmailNormalizerTest
 */
class EmailNormalizerTest extends TestCase
{

    /**
     * @param $email
     * @param $expected
     * @dataProvider provideDataToTestNormalize
     */
    public function testNormalize($email, $expected)
    {
        $emailNormalizer = new EmailNormalizer(new TestRules());
        $this->assertEquals($expected, $emailNormalizer->normalize($email));
    }

    /**
     * @return Generator
     */
    public function provideDataToTestNormalize()
    {
        yield ['invalid email', null];

        yield ['test@example.com', 'test@example.com'];
        yield ['test+random@example.com', 'test+random@example.com'];
        yield ['te.st+random@example.com', 'te.st+random@example.com'];
        yield ['te.st+random@gmail.com', 'test@gmail.com'];
        yield ['te.st+random@googlemail.com', 'test@gmail.com'];
        yield ['t.e.s.t+random@googlemail.com', 'test@gmail.com'];
        yield ['t.e.s.t+rand.om@google.mail.com', 't.e.s.t+rand.om@google.mail.com'];
        yield ['test+random@hotmail.com', 'test@hotmail.com'];
        yield ['te.st+random@hotmail.com', 'te.st@hotmail.com'];
        yield ['test+whatever@yahoo.com', 'test+whatever@yahoo.com'];
        yield ['test-whatever@yahoo.com', 'test@yahoo.com'];
        yield ['whatever@test.fastmail.com', 'test@fastmail.com'];
        yield ['whatever+random@test.fastmail.com', 'test@fastmail.com'];
        yield ['whatever@invalid.test.fastmail.com', 'whatever@invalid.test.fastmail.com'];
        yield ['test+random@fastmail.com', 'test@fastmail.com'];

        yield ['us.er.na.me+whatever@plusdots.test', 'username@plusdots.test'];
        yield ['us.er.na.me-whatever@hyphendots.test', 'username@hyphendots.test'];
        yield ['us.er.na.me+whatever@plus.test', 'us.er.na.me@plus.test'];
        yield ['us.er.na.me-whatever@hyphen.test', 'us.er.na.me@hyphen.test'];
        yield ['us.er.na.me+whatever@dots.test', 'username+whatever@dots.test'];
        yield ['wh.at+ever@username.subdomain.test', 'username@subdomain.test'];
    }
}
