<?php
require_once 'Date.php';


class DateTest
{


    public function dateClassConstructorArgumentsAcceptsOnlyInteger(): int
    {
        $argumentArray = ['1', 2, 3];
        $count = 0;
        for ($i = 0; $i < count($argumentArray); $i++) {
            $argumentArray = DateTest::argumentLoop($argumentArray);
            $dateClass = new Date($argumentArray[0], $argumentArray[1], $argumentArray[2]);
            $returnErrorMessage = $dateClass->displayDate();
            if ($returnErrorMessage === 'Wrong date!') {
                $count++;
            }
        }
        return $count;
    }

    static function argumentLoop(array $arrayOfArguments): array
    {
        $copyFirstArgument = $arrayOfArguments[0];
        array_shift($arrayOfArguments);
        $arrayOfArguments[-1] = $copyFirstArgument;
        return $arrayOfArguments;
    }

    public function testAll()
    {

    }
}