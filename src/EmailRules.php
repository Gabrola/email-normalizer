<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer;

/**
 * Class EmailRules
 * @package Gabrola\EmailNormalizer
 */
class EmailRules implements EmailRulesInterface
{
    /**
     * @return array
     */
    public function getRules()
    {
        return array_merge(
            $this->googleRules(),
            $this->outlookRules(),
            $this->yahooRules(),
            $this->fastmailRules()
        );
    }

    /**
     * @return array
     */
    private function googleRules()
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

    /**
     * @return array
     */
    private function outlookRules()
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

    /**
     * @return array
     */
    private function yahooRules()
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

    /**
     * @return array
     */
    private function fastmailRules()
    {
        return [
            '123mail.org'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '150mail.com'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '150ml.com'            => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '16mail.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '2-mail.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '4email.net'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            '50mail.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'airpost.net'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'allmail.net'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'bestmail.us'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'cluemail.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'elitemail.org'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailcorner.net'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailengine.net'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailengine.org'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailgroups.net'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailplus.org'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'emailuser.net'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'eml.cc'               => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'f-m.fm'               => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fast-email.com'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fast-mail.org'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastem.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastemail.us'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastemailer.com'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastest.cc'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastimap.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.cn'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.co.uk'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.com.au'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.de'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.es'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.fm'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.fr'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.im'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.in'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.jp'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.mx'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.net'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.nl'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.org'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.se'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.to'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.tw'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.uk'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmail.us'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmailbox.net'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fastmessaging.com'    => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fea.st'               => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fmail.co.uk'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fmailbox.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fmgirl.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'fmguy.com'            => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'ftml.net'             => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'h-mail.us'            => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'hailmail.net'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'imap-mail.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'imap.cc'              => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'imapmail.org'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'inoutbox.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'internet-e-mail.com'  => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'internet-mail.org'    => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'internetemails.net'   => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'internetmailing.net'  => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'jetemail.net'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'justemail.net'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'letterboxes.org'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mail-central.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mail-page.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailandftp.com'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailas.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailbolt.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailc.net'            => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailcan.com'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailforce.net'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailftp.com'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailhaven.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailingaddress.org'   => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailite.com'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailmight.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailnew.com'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailsent.net'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailservice.ms'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailup.net'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mailworks.org'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'ml1.net'              => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mm.st'                => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'myfastmail.com'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'mymacmail.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'nospammail.net'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'ownmail.net'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'petml.com'            => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'postinbox.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'postpro.net'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'proinbox.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'promessage.com'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'realemail.net'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'reallyfast.biz'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'reallyfast.info'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'rushpost.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'sent.as'              => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'sent.at'              => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'sent.com'             => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'speedpost.net'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'speedymail.org'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'ssl-mail.com'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'swift-mail.com'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'the-fastest.net'      => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'the-quickest.com'     => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'theinternetemail.com' => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'veryfast.biz'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'veryspeedy.net'       => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'warpmail.net'         => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'xsmail.com'           => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'yepmail.net'          => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ],
            'your-mail.com'        => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::SUBDOMAIN_ADDRESSING
            ]
        ];
    }
}