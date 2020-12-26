<?php


namespace App\Creational\Singleton;


class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null == static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}
