<?php


namespace App\Creational\Strategy;


class Customer implements UserInterface
{
    private $rate = 0.5;

    public function getRate()
    {
        return $this->rate;
    }

}
