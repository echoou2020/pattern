<?php


namespace App\Creational\Strategy;


class Cashier
{

    private $cutomer;

    public function setStrategy(CustomerAbstract $customer)
    {
        $this->cutomer = $customer;
    }

    public function getMoney($price)
    {
        return $this->cutomer->pay($price);
    }
}
