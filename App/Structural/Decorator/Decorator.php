<?php


namespace App\Structural\Decorator;


abstract class Decorator implements RenderableInterface
{
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }

}
