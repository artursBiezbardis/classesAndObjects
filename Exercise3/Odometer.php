<?php declare(strict_types=1);


class Odometer
{
    private float $odometerLimit;
    private float $odometerStartMileage;
    private float $kilometersPerLiter;

    public function __construct(float $odometerLimit, float $odometerStartMileage, float $kilometersPerLiter)
    {
        $this->odometerLimit = $odometerLimit;
        $this->odometerStartMileage = $odometerStartMileage;
        $this->kilometersPerLiter = $kilometersPerLiter;
    }

    public function traveledMileageAfter10Km($fuelGauge): string
    {
        self::odometerReset();
        self::countAndSetMileage();
        $fuelGauge->fuelConsumption();
        if ($fuelGauge->fuelLimits()) {
            return 'Current mileage ' . self::getOdometerMileage() . ' Km, ' .
                $fuelGauge->showAmountOfFuel() . ' liters of fuel left.' . PHP_EOL;
        } else {
            return 'You are out of fuel!' . PHP_EOL;
        }
    }

    public function odometerReset(): void
    {
        if (self::getOdometerMileage() >= $this->odometerLimit) {
            self::setOdometerMileage(0);
        }
    }

    /**
     * @return float
     */
    public function getOdometerMileage(): float
    {
        return $this->odometerStartMileage;
    }

    /**
     * @param float $setOdometerMileage
     */
    public function setOdometerMileage(float $setOdometerMileage): void
    {
        $this->odometerStartMileage = $setOdometerMileage;
    }

    public function countAndSetMileage(): void
    {
        self::setOdometerMileage(self::getOdometerMileage() + $this->kilometersPerLiter);
    }
}