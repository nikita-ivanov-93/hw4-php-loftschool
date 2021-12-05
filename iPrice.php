<?php

interface iPrice
{
    public function calculatePrice();
    public function addService(iService $iService);
    public function getTime();
    public function getDistance();
}