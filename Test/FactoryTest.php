<?php

class FactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testPhoneProcut()
    {
        $phone = \App\Creational\Factory\IphoneFactory::make();
        $this->assertInstanceOf(\App\Creational\Factory\Iphone::class, $phone);
    }
}
