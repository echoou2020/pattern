<?php

require __DIR__.'/vendor/autoload.php';

class Client
{
    public function index()
    {
        $factory = (new App\Factory\AddFactory())->create();
        $factory->setNumberA(5);
        $factory->setNumberB(3);
        echo $factory->getResult();
    }
}


$client = new Client();

$client->index();
