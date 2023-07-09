<?php

namespace Vassilidev\Stubbify\Exceptions;

class OutputFileAlreadyExistException extends \Exception
{
    public function __construct(string $filePath)
    {
        $errorMessage = sprintf('File already exist ! [%s]', $filePath);

        parent::__construct($errorMessage);
    }
}