<?php

class gpsService implements iService
{
    private $pricePerHour;
    public function __construct(int $pricePerHour)
    {
         $this->pricePerHour = $pricePerHour;
    }
    public function applyService(iPrice $tariff)
    {
        $time = ceil($tariff->getTime() / 60);
        $tariff->price +=$this->pricePerHour * $time;

    }
}