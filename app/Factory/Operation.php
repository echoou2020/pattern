<?php


namespace App\Factory;


abstract class Operation
{
    protected  $numberA;
    protected  $numberB;

    public function setNumberA($numberA)
    {
        $this->numberA = $numberA;
    }

    public function setNumberB($numberB)
    {
        $this->numberB = $numberB;
    }

    abstract function getResult();
}
