<?php


namespace App\Creational\Strategy;


class NormalCustomer extends CustomerAbstract
{

    public function pay($price)
    {
        return $price;
    }
}
