<?php

namespace Vassilidev\Stubbify;

use Vassilidev\Stubbify\Exceptions\FileNotFoundException;
use Vassilidev\Stubbify\Exceptions\OutputFileAlreadyExistException;

class Stubbify
{
    /**
     * @throws FileNotFoundException
     * @throws OutputFileAlreadyExistException
     */
    public static function make(
        string $inputFilePath,
        string $outputFilePath,
        array  $data = [],
        bool $override = false,
    ): Generator
    {
        return (new Generator(...func_get_args()))->generate();
    }
}