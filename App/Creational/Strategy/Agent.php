<?php


namespace App\Creational\Strategy;


class Agent implements UserInterface
{
    private  $rate = 0.8;

    public function getRate()
    {
        return $this->rate;
    }

}
