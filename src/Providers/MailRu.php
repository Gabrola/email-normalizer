<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class MailRu
 * @package Gabrola\EmailNormalizer\Providers
 */
class MailRu implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'mail.ru' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ]
        ];
    }
}