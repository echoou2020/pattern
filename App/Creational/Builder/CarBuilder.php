<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\Car;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\Engine;
use App\Creational\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{

    private $truck;

    public function createVehicle()
    {
        $this->truck = new Car();
    }


    public function addEngine()
    {
        $this->truck->setPart('carEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Door());
        $this->truck->setPart('rightDoor', new Door());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}
