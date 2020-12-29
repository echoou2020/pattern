<?php

namespace App\Creational\SimpleFactory;


class SimpleFactory
{
    static public function createPhone($brand)
    {
        switch ($brand) {
            case 'Xiaomi':
                return new Xiaomi();
                break;
            case 'Huawei':
                return new Huawei();
                break;
            case 'Iphone':
                return new Iphone();
                break;
            default:
                return new Shanzhaiji();
        }
    }
}
