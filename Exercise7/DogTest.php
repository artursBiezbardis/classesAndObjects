<?php declare(strict_types=1);
require_once 'Dog.php';


class DogTest
{


    public function testAllDogs($dogHasRelativeFromMotherSide = false, $getDogsFather = false)
    {

        $allDogs =
            [
                new Dog('Max', 'male', 'Lady', 'Rocky'),
                new Dog('Rocky', 'male', 'Molly', 'Sam'),
                new Dog('Sparky', 'male'),
                new Dog('Buster', 'male', 'Lady', 'Sparky'),
                new Dog('Sam', 'male'),
                new Dog('Lady', 'female'),
                new Dog('Molly', 'female'),
                new Dog('Coco', 'female', 'Molly', 'Sparky')
            ];
        if ($getDogsFather) {
            foreach ($allDogs as $dog) {
                if ($dog->getName() === $getDogsFather) {
                    return $dog->fatherName();
                }
            }
        }elseif ($dogHasRelativeFromMotherSide){
            return Dog::hasSameMotherAs('Coco','Rocky',$allDogs);
        }
        return 'no test cases';
    }

}
$tD= new DogTest();

echo $tD->testAllDogs("Coco",false).PHP_EOL;