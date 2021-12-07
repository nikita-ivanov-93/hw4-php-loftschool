<?php

abstract class Tariff implements iPrice
{
    public $price;
    protected $pricePerMinute;
    protected $pricePerKm;
    protected $time;
    protected $distance;
    /** @var iService[] */
    protected $services = [];

    public function __construct(int $distance, int $time)
    {
        $this->distance = $distance;
        $this->time = $time;
    }
    public function calculatePrice()
    {
        $this->price = $this->distance * $this->pricePerKm + $this->time * $this->pricePerMinute;
        foreach ($this->services as $service)
        {
            $service->applyService($this);
        }
        return $this->price;
    }
    public function addService(iService $iService)
    {
        $this->services[] = $iService;
        return $this->services;

    }
    public function getTime()
    {
        return $this->time;
    }
    public function getDistance()
    {
        return $this->distance;
    }
}
