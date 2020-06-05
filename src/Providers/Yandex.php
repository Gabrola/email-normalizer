<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Yandex
 * @package Gabrola\EmailNormalizer\Providers
 */
class Yandex implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'yandex.com' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'yandex.ru'  => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'yandex.com'
            ],
            'yandex.by'  => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'yandex.com'
            ],
            'yandex.ua'  => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'yandex.com'
            ],
            'yandex.kz'  => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'yandex.com'
            ],
            'ya.ru'      => [
                'rules'   => EmailNormalizer::PLUS_TAG,
                'aliasOf' => 'yandex.com'
            ]
        ];
    }
}