<?php

namespace App\Service;

class TwoTextCompareFactory
{
    /**
     * @param string $text1
     * @param string $text2
     * @return TwoTextCompare
     */
    public static function createCompareTextsFactory(string $text1, string $text2): TwoTextCompare
    {
        return new TwoTextCompare($text1, $text2);
    }
}