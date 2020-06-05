<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class ProtonMail
 * @package Gabrola\EmailNormalizer\Providers
 */
class ProtonMail implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'protonmail.com' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'protonmail.ch'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'pm.me'          => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
        ];
    }
}