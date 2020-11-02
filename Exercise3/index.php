<?php declare(strict_types=1);
require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge(0, 120);
$odometer = new Odometer(999.999, 0, 10);
while ($fuelGauge->fuelLimits()) {
    echo $fuelGauge->fillFuelTankAndShowAmount();
    usleep(50000);
}
while ($fuelGauge->fuelLimits() || $fuelGauge->getFuelTankLimit() === $fuelGauge->showAmountOfFuel()) {
    echo $odometer->traveledMileageAfter10Km($fuelGauge);
    usleep(50000);
}
