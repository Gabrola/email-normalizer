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
    const PLUS_TAG             = 0b0001;
    const HYPHEN_TAG           = 0b0010;
    const USERNAME_DOTS        = 0b0100;
    const SUBDOMAIN_ADDRESSING = 0b1000;
    const PLUS_AND_DOTS        = 0b0101;
    const HYPHEN_AND_DOTS      = 0b0110;

    /**
     * @var array
     */
    protected $emailRules;

    /**
     * EmailNormalizer constructor.
     * @param EmailRulesInterface $emailRules
     */
    public function __construct(EmailRulesInterface $emailRules)
    {
        $this->emailRules = $emailRules->getRules();
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

        list ($username, $domain, $subdomain, $topDomain) = $emailParts;

        if (isset($this->emailRules[$topDomain]) && ($this->emailRules[$topDomain]['rules'] & self::SUBDOMAIN_ADDRESSING) === self::SUBDOMAIN_ADDRESSING) {
            $username = $subdomain;
            $domain   = $topDomain;
        } else if (isset($this->emailRules[$domain])) {
            $rules = $this->emailRules[$domain]['rules'];

            if (($rules & self::PLUS_AND_DOTS) === self::PLUS_AND_DOTS) {
                $username = preg_replace('/\.|\+.*/', '', $username);
            } else if (($rules & self::HYPHEN_AND_DOTS) === self::HYPHEN_AND_DOTS) {
                $username = preg_replace('/\.|-.*/', '', $username);
            } else if (($rules & self::PLUS_TAG) === self::PLUS_TAG) {
                $username = preg_replace('/\+.*/', '', $username);
            } else if (($rules & self::HYPHEN_TAG) === self::HYPHEN_TAG) {
                $username = preg_replace('/-.*/', '', $username);
            } else if (($rules & self::USERNAME_DOTS) === self::USERNAME_DOTS) {
                $username = preg_replace('/\./', '', $username);
            }
        } else {
            return $email;
        }

        if (isset($this->emailRules[$domain]['aliasOf'])) {
            $domain = $this->emailRules[$domain]['aliasOf'];
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
        $username = substr($email, 0, $atPosition);
        $domain   = substr($email, $atPosition + 1);

        $domainParts = explode('.', $domain);
        $topDomain   = null;
        $subdomain   = null;
        if (count($domainParts) > 2) {
            $subdomain = array_shift($domainParts);
            $topDomain = implode('.', $domainParts);
        }

        return [$username, $domain, $subdomain, $topDomain];
    }
}