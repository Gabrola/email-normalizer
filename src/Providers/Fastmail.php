<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Fastmail
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class Fastmail implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
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