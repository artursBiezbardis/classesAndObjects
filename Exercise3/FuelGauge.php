<?php declare(strict_types=1);


class FuelGauge
{
    const KILOMETERS_LITER = 1;
    private float $fuelTank;
    private float $fuelTankLimit;

    public function __construct(float $fuelTank, float $fuelTankLimit)
    {
        $this->fuelTank = $fuelTank;
        $this->fuelTankLimit = $fuelTankLimit;
    }

    /**
     * @return float
     */
    public function getFuelTankLimit(): float
    {
        return $this->fuelTankLimit;
    }

    public function fuelLimits(): bool
    {
        if (self::showAmountOfFuel() < 0 || self::showAmountOfFuel() >= self::getFuelTankLimit()) {
            return false;
        } else {
            return true;
        }

    }

    /**
     * @return float
     */
    public function showAmountOfFuel(): float
    {
        return $this->fuelTank;
    }

    public function fillFuelTankAndShowAmount(): string
    {
        self::setFuelTank(self::showAmountOfFuel() + self::KILOMETERS_LITER);
        if (self::showAmountOfFuel() > 1) {
            return 'You have filled ' . self::showAmountOfFuel() . ' liters.' . PHP_EOL;
        } else {
            return 'You have filled ' . self::showAmountOfFuel() . ' liter.' . PHP_EOL;
        }
    }

    /**
     * @param float $fuelTank
     */
    public function setFuelTank(float $fuelTank): void
    {
        $this->fuelTank = $fuelTank;
    }

    public function fuelConsumption()
    {
        self::setFuelTank(self::showAmountOfFuel() - self::KILOMETERS_LITER);
        return self::showAmountOfFuel();

    }

}