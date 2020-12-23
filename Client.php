<?php

require __DIR__.'/vendor/autoload.php';

class Client
{
    public function index()
    {
        $add = new App\Factory\Sub();
        $add->setNumberA(1);
        $add->setNumberB(3);
        echo $add->getResult();
    }
}


$client = new Client();

$client->index();
