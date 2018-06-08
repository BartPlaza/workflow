<?php

namespace App\Models;

class Validator
{
    const MINLENGTH = 4;
    const MAXLENGTH = 10;

    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function validate()
    {
        return strlen($this->text) >= self::MINLENGTH && strlen($this->text <= self::MAXLENGTH);
    }
}