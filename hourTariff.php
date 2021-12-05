<?php

class hourTariff extends Tariff
{
    public $pricePerKm = 0;
    public $pricePerHour = 200;
    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        $this->time = ceil($this->time/60);
        var_dump($this->time);
    }
    public function calculatePrice()
    {
        $this->price = $this->time * $this->pricePerHour;
        if ($this->services)
        {
            foreach ($this->services as $service)
            {
                $service->applyService($this);
            }
        }
        return $this->price;
    }
}