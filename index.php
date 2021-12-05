<?php

include "iPrice.php";
include "iService.php";
include "Tariff.php";
include "baseTariff.php";
include "gpsService.php";
include "studentTariff.php";
include "hourTariff.php";
include "driverService.php";

/** @var iPrice $tariff */
$tariff = new hourTariff(5, 62);

$tariff->addService(new driverService(100));

echo $tariff->calculatePrice();
