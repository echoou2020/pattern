<?php


namespace App\Structural\Proxy;


class ByHousePorxy implements ByHouseInterface
{

    protected $customer;

    public function __construct(ByHouseInterface $customer)
    {
        $this->customer = $customer;
    }

    public function byHouse()
    {
        echo "by house before \r\n";
        $this->customer->byHouse();
        echo "by house after \r\n";
        return 1;
    }

}
