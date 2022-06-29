<?php

namespace App\Service;

use App\Service\Reader\Reader;

class TwoTextCompare
{
    protected $text1;
    protected $text2;

    /**
     * @param string $text1
     * @param string $text2
     */
    public function __construct(string $text1, string $text2)
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
    }

    /**
     * @desc compare two texts using levenshtein() function
     *       levenshtein calculate distance between two strings
     * @param string $text1
     * @param string $text2
     * @return int
     */
    public function compare(string $text1, string $text2): int
    {
        return levenshtein($text1, $text2);
    }

    /**
     * @desc get result from comparing two texts
     * @return int
     */
    public function compareTexts(): int
    {

        $text1 = Reader::readFile($this->text1);
        $text2 = Reader::readFile($this->text2);

        return $this->compare($text1, $text2);
    }
}