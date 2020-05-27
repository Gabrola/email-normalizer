<?php
/**
 * @author Youssef Gaber <1728215+Gabrola@users.noreply.github.com>
 * @copyright Copyright 2020 Youssef Gaber
 */

namespace Gabrola\EmailNormalizer;

/**
 * Interface EmailRulesInterface
 * @package Gabrola\EmailNormalizer
 */
interface EmailRulesInterface
{
    /**
     * @return array
     */
    public function getRules();
}