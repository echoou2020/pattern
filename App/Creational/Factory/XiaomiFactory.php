<?php


namespace App\Creational\Factory;


class XiaomiFactory extends AbstractFactory
{
    static public function make(){
        return new Xiaomi();
    }
}
