<?php


namespace App\Structural\Bridge;


class PlainTextFormatter implements FormatInterface
{

    public function format($text)
    {
        return $text;
    }
}
