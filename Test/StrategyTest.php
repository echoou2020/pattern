<?php

/**
 * 策略模式
 * Class StrategyTest
 */

class StrategyTest extends \PHPUnit\Framework\TestCase
{

    public function testGetCommistion()
    {
        $price = 100;

        $agent = new \App\Creational\Strategy\Agent();
        $customer = new \App\Creational\Strategy\Customer();
        $commistion = new \App\Creational\Strategy\Commistion();
        $commistion->setUser($agent, $price);
        $agentCommistion = $commistion->getCommistion();

        $commistion->setUser($customer, $price);
        $customerCommiston = $commistion->getCommistion();

        $this->assertEquals($price*0.8, $agentCommistion);
        $this->assertEquals($price*0.5, $customerCommiston);
    }
}
