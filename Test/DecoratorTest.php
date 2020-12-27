<?php


class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testShow()
    {
        $webservice = new \App\Structural\Decorator\Webservice('hello world');

        $this->assertEquals('hello world', $webservice->renderData());
    }

    public function testShowJson()
    {
        $webservice = new \App\Structural\Decorator\Webservice('hello world');
        $json = new \App\Structural\Decorator\RenderInJson($webservice);
        $xml = new \App\Structural\Decorator\RenderInXml($webservice);

        $this->assertEquals('hello world json', $json->renderData());
        $this->assertEquals('hello world xml', $xml->renderData());
    }
}
