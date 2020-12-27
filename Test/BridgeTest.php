<?php

class BridgeTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloworldService()
    {
        $hello = new \App\Structural\Bridge\HelloWorldService(new \App\Structural\Bridge\PlainTextFormatter());
        $this->assertEquals('hello world', $hello->get());

        $helloHtml = new \App\Structural\Bridge\HelloWorldService(new \App\Structural\Bridge\HtmlTextFormatter());
        $this->assertEquals("<p>hello world</p>", $helloHtml->get());
    }
}
