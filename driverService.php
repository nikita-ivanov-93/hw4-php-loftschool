<?php

class driverService implements iService
{

    private $priceDriver;

    public function __construct(int $price)
    {
        $this->priceDriver = $price;
    }

    public function applyService(iPrice $tariff)
    {
        $tariff->price += $this->priceDriver;
    }
}