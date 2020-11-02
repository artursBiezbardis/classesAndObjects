<?php declare(strict_types=1);

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinksPercent = 0.64;

function calculateEnergyDrinkers(int $surveyed,float $purchasedEnergyDrinks)
{
    if (is_int($surveyed) && is_float($purchasedEnergyDrinks)) {
        return $surveyed * $purchasedEnergyDrinks;
    }
    throw new LogicException('Argument has wrong type!!');
}

function calculatePreferCitrus(int $energyDrinkDrinkers,float $preferCitrusDrinks)
{
    if (is_int($energyDrinkDrinkers) && is_float($preferCitrusDrinks)) {
        return $energyDrinkDrinkers * $preferCitrusDrinks;
    }
    throw new LogicException('Argument has wrong type!!');
}

$energyDrinkersDrinkers = (int)round(calculateEnergyDrinkers
($surveyed, $purchasedEnergyDrinks));
$preferCitrusDrinks = (int)round(calculatePreferCitrus
($energyDrinkersDrinkers, $preferCitrusDrinksPercent));

echo 'Total number of people surveyed ' . $surveyed . '.';
echo ' Approximately ' . $energyDrinkersDrinkers . ' bought at least one energy drink ,';
echo $preferCitrusDrinks . ' of those ' . 'prefer citrus flavored energy drinks.' . PHP_EOL;

