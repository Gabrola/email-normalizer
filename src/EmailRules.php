<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer;

use Gabrola\EmailNormalizer\Providers\Fastmail;
use Gabrola\EmailNormalizer\Providers\Google;
use Gabrola\EmailNormalizer\Providers\ICloud;
use Gabrola\EmailNormalizer\Providers\MailRu;
use Gabrola\EmailNormalizer\Providers\Outlook;
use Gabrola\EmailNormalizer\Providers\Yahoo;
use Gabrola\EmailNormalizer\Providers\Yandex;

/**
 * Class EmailRules
 * @package Gabrola\EmailNormalizer
 */
class EmailRules implements EmailRulesInterface
{
    /**
     * @var array
     */
    protected $providers;

    /**
     * EmailRules constructor.
     */
    public function __construct()
    {
        $this->providers = [
            new Google(),
            new Outlook(),
            new Yahoo(),
            new Fastmail(),
            new ICloud(),
            new Yandex(),
            new MailRu()
        ];
    }

    /**
     * @return array
     */
    public function getRules()
    {
        $providerRules = array_map(function (EmailRulesInterface $provider) {
            return $provider->getRules();
        }, $this->providers);

        return array_merge(...$providerRules);
    }
}