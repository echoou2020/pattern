<?php


namespace App\Factory;


class Add extends Operation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }

}
