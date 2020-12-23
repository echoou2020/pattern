<?php


namespace App\Factory;


class SubFactory extends  Factory
{

    public function create()
    {
        return new Sub();
    }
}
