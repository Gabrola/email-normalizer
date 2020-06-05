<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Yahoo
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class Yahoo implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'yahoo.com'      => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.ar'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.au'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.at'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.be'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.br'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ca'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.cn'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.cn'   => [
                'rules'   => EmailNormalizer::HYPHEN_TAG,
                'aliasOf' => 'yahoo.cn'
            ],
            'yahoo.com.co'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.cz'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.dk'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.fi'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.fr'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.de'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.gr'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.hk'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.hu'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.in'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.in'    => [
                'rules'   => EmailNormalizer::HYPHEN_TAG,
                'aliasOf' => 'yahoo.in'
            ],
            'yahoo.co.id'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ie'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.il'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.it'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.jp'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.kr'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.my'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.mx'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ae'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.nl'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.nz'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.no'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.ph'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.pl'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.pt'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ro'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ru'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.sg'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.za'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.es'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.se'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.ch'       => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.tw'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.th'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.tr'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.co.uk'    => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'yahoo.com.vn'   => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'ymail.com'      => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'rocketmail.com' => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ]
        ];
    }
}