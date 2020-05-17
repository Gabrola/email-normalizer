<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

use Gabrola\EmailNormalizer\EmailNormalizer;
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
        $emailNormalizer = new EmailNormalizer();
        $this->assertEquals($expected, $emailNormalizer->normalize($email));
    }

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
    }
}
