<?php


namespace App\Creational\Factory;


class IphoneFactory extends AbstractFactory
{
    static public function make(){
        return new Iphone();
    }
}
