<?php


class Patient
{
    public $name;
    public $code;
    public function __construct(string $name,int $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
}