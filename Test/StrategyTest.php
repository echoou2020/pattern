<?php

/**
 * 策略模式
 * Class StrategyTest
 */

class StrategyTest extends \PHPUnit\Framework\TestCase
{

    public function testCustomer()
    {
        $price = 100;

        $vipCutomer = new \App\Creational\Strategy\VipCustomer();
        $normalCustomer = new \App\Creational\Strategy\NormalCustomer();

        $cashier = new \App\Creational\Strategy\Cashier();

        $cashier->setStrategy($vipCutomer);
        $this->assertEquals(95, $cashier->getMoney($price));

        $cashier->setStrategy($normalCustomer);
        $this->assertEquals(100, $cashier->getMoney($price));
    }
}
