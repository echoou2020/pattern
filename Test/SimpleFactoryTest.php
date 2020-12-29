<?php
/**
 * 简单工厂测试
 */
include __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase
{

    public function testCanCreateBicycle()
    {
        $phone = SimpleFactory::createPhone('Xiaomi');
        $this->assertInstanceOf(\App\Creational\SimpleFactory\Phone::class, $phone);
    }
}
