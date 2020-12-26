<?php


class DirectorTest extends \PHPUnit\Framework\TestCase
{

    public function testBuildTruck()
    {
        $truck = new \App\Creational\Builder\TruckBuilder();
        $newVehicle = (new \App\Creational\Builder\Director())->build($truck);
        $this->assertInstanceOf(\App\Creational\Builder\Parts\Truck::class, $newVehicle);
    }

    public function testBildCar()
    {
        $car = new \App\Creational\Builder\CarBuilder();
        $newVehicle = (new \App\Creational\Builder\Director())->build($car);

        $this->assertInstanceOf(\App\Creational\Builder\Parts\Car::class, $newVehicle);
    }

}
