<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRules;
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
        $emailNormalizer = new EmailNormalizer(new EmailRules());
        $this->assertEquals($expected, $emailNormalizer->normalize($email));
    }

    /**
     * @return Generator
     */
    public function provideDataToTestNormalize()
    {
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
    }
}
