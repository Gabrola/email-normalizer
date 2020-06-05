<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class ICloud
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class ICloud implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'icloud.com'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'me.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'icloud.com'
            ],
            'mac.com' => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'icloud.com'
            ]
        ];
    }
}