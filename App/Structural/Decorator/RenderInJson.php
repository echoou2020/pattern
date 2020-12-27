<?php


namespace App\Structural\Decorator;


class RenderInJson extends Decorator
{

    public function renderData()
    {
        return $this->wrapped->renderData().' json';
    }

}
