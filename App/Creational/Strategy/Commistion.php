<?php


namespace App\Creational\Strategy;


class Commistion
{
    private $user;
    private $price;

    public function setUser(UserInterface $user, $price)
    {
        $this->user = $user;
        $this->price = $price;
    }

    public function getCommistion()
    {
        return $this->price * $this->user->getRate();
    }

}
