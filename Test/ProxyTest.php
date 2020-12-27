<?php

class ProxyTest extends \PHPUnit\Framework\TestCase
{
    public function testByHouse()
    {
        $proxy = new \App\Structural\Proxy\ByHousePorxy(new \App\Structural\Proxy\TomByHouse());

        $this->assertEquals(1, $proxy->byHouse());
    }
}
