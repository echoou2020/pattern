<?php


namespace App\Structural\Decorator;


class RenderInXml extends Decorator
{

    public function renderData()
    {
        return $this->wrapped->renderData().' xml';
    }

}
