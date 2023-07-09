<?php

namespace Vassilidev\Stubbify\Exceptions;

class FileNotFoundException extends \Exception
{
    public function __construct(string $filePath)
    {
        $errorMessage = sprintf('File not found ! [%s]', $filePath);

        parent::__construct($errorMessage);
    }
}