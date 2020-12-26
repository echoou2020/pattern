<?php
/**
 * 简单工厂测试
 */
include __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Creational\SimpleFactory\Bicycle;
use App\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase
{

    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
