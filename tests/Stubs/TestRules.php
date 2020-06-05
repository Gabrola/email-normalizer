<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer\Tests\Stubs;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRules;

/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

class TestRules extends EmailRules
{
    public function getRules()
    {
        return array_merge(parent::getRules(), [
            'plusdots.test' => [
                'rules' => EmailNormalizer::PLUS_TAG | EmailNormalizer::USERNAME_DOTS
            ],
            'hyphendots.test' => [
                'rules' => EmailNormalizer::HYPHEN_TAG | EmailNormalizer::USERNAME_DOTS
            ],
            'plus.test' => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
            'hyphen.test' => [
                'rules' => EmailNormalizer::HYPHEN_TAG
            ],
            'dots.test' => [
                'rules' => EmailNormalizer::USERNAME_DOTS
            ],
            'subdomain.test' => [
                'rules' => EmailNormalizer::SUBDOMAIN_ADDRESSING
            ]
        ]);
    }
}