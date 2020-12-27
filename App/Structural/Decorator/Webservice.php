<?php


namespace App\Structural\Decorator;


class Webservice implements RenderableInterface
{

    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        return $this->data;
    }
}
