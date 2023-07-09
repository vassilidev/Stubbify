<?php

namespace Vassilidev\Stubbify;

use Vassilidev\Stubbify\Exceptions\FileNotFoundException;
use Vassilidev\Stubbify\Exceptions\OutputFileAlreadyExistException;

class Generator
{
    public int $success = 0;
    public string $originalFileContent;
    public string $replacedFileContent;

    /**
     * @throws FileNotFoundException
     * @throws OutputFileAlreadyExistException
     */
    public function __construct(
        public string $inputFilePath,
        public string $outputFilePath,
        public array  $data = [],
        public bool   $override = false,
    )
    {
        if (!file_exists($this->inputFilePath)) {
            throw new FileNotFoundException($this->inputFilePath);
        }

        if (file_exists($this->outputFilePath) && !$this->override) {
            throw new OutputFileAlreadyExistException($this->inputFilePath);
        }

        $this->originalFileContent = $this->extractFileContent();
        $this->replacedFileContent = $this->replaceVariablesInOriginalFileContent();
    }

    private function extractFileContent(): string
    {
        return file_get_contents($this->inputFilePath);
    }

    private function replaceVariablesInOriginalFileContent(): string
    {
        return str_replace(
            search: array_keys($this->data),
            replace: array_values($this->data),
            subject: $this->originalFileContent,
        );
    }

    public function generate(): self
    {
        $success = file_put_contents(
            filename: $this->outputFilePath,
            data: $this->replacedFileContent,
        );

        if ($success) {
            $this->success = $success;
        }

        return $this;
    }
}