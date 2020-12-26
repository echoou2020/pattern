<?php

namespace App\Creational\SimpleFactory;


class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}
