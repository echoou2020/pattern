<?php


namespace App\Factory;


class Sub extends Operation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}
