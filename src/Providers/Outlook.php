<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Outlook
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class Outlook implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'live.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::USERNAME_DOTS
            ],
            'hotmail.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.ar'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.au'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.at'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.be'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.br'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.cl'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.cz'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.dk'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.fr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.de'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.gr'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.co.il'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.in'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.co.id'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.ie'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.it'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.hu'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.jp'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.kr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.lv'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.my'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.co.nz'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.pe'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.ph'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.pt'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.sa'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.sg'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.sk'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.es'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.co.th'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.tr'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'outlook.com.vn'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'msn.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.be'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.ca'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.ch'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.cl'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.il'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.jp'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.kr'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.nz'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.th'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.uk'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.co.za'   => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.ar'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.au'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.br'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.hk'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.in'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.com.tw'  => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.cz'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.de'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.dk'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.dr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.es'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.fi'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.fr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.gr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.hu'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.it'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.lv'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.my'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.nl'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.no'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.ph'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.rs'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.ru'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.se'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.sg'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hotmail.sk'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.at'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.be'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.ca'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.cl'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.cn'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.co.in'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.co.jp'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.co.kr'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.co.uk'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.co.za'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.ar'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.au'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.mx'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.my'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.pe'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.ph'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.pk'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.pt'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.sg'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.com.ve'     => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.de'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.dk'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.fi'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.fr'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.ie'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.in'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.it'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.jp'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.nl'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.no'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.ru'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'live.se'         => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'livemail.com.br' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'livemail.com.tw' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'windowslive.com' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ]
        ];
    }
}