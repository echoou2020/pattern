<?php


namespace App\Structural\Bridge;


abstract class Service
{
    protected $implementation;

    public function __construct(FormatInterface $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(FormatInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}
