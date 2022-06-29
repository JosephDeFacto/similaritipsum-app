<?php

namespace App\Service\Reader;

class Reader
{
    const PATH = '../src/files/';

    const FILE_EXTENSION = '.txt';

    /**
     * @desc read file from directory
     * @param $filename
     * @return false|string
     */
    public static function readFile($filename)
    {
        return file_get_contents(self::PATH . "{$filename}".self::FILE_EXTENSION, FILE_USE_INCLUDE_PATH);
    }
}