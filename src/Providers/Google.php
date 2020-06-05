<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Google
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class Google implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'gmail.com'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::USERNAME_DOTS
            ],
            'google.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::USERNAME_DOTS
            ],
            'googlemail.com' => [
                'rules'   => EmailNormalizer::PLUS_TAG | EmailNormalizer::USERNAME_DOTS,
                'aliasOf' => 'gmail.com'
            ]
        ];
    }
}