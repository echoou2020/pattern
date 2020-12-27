<?php


namespace App\Structural\Bridge;


class HtmlTextFormatter implements FormatInterface
{
    public function format($text)
    {
        return "<p>{$text}</p>";
    }
}
