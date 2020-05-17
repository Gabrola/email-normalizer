<?php
/**
 * @author    Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer;


/**
 * Class EmailNormalizer
 * @package Gabrola\EmailNormalizer
 */
class EmailNormalizer
{
    const PLUS_REGEX = '/\+.*/';
    const PLUS_AND_DOT_REGEX = '/\.|\+.*/';

    /**
     * @var array
     */
    protected $emailProviders;

    /**
     * EmailNormalizer constructor.
     */
    public function __construct()
    {
        $this->emailProviders = [
            'gmail.com'      => [
                'replace' => self::PLUS_AND_DOT_REGEX
            ],
            'googlemail.com' => [
                'replace' => self::PLUS_AND_DOT_REGEX,
                'aliasOf' => 'gmail.com'
            ],
            'live.com'       => [
                'replace' => self::PLUS_AND_DOT_REGEX
            ],
            'hotmail.com'    => [
                'replace' => self::PLUS_REGEX
            ],
            'outlook.com'    => [
                'replace' => self::PLUS_REGEX
            ]
        ];
    }

    /**
     * Will return a normalized email address. If email is invalid it will return null.
     * @param string $email
     * @return string|null
     */
    public function normalize($email)
    {
        if (($emailParts = self::parseEmail($email)) === null) {
            return null;
        }

        list ($username, $domain) = $emailParts;

        if (!isset($this->emailProviders[$domain])) {
            return $email;
        }

        if (isset($this->emailProviders[$domain]['replace'])) {
            $username = preg_replace($this->emailProviders[$domain]['replace'], '', $username);
        }

        if (isset($this->emailProviders[$domain]['aliasOf'])) {
            $domain = $this->emailProviders[$domain]['aliasOf'];
        }

        return $username . '@' . $domain;
    }

    /**
     * @param $email
     * @return array|null
     */
    private static function parseEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return null;
        }

        $atPosition = strrpos($email, '@');

        if ($atPosition === false) {
            return null;
        }

        $username = substr($email, 0, $atPosition);
        $domain   = substr($email, $atPosition + 1);

        return [$username, $domain];
    }
}