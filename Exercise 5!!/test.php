<?php declare(strict_types=1);
require_once 'Date.php';
require_once 'DateTest.php';

$tD = new DateTest();

var_dump($tD->dateClassConstructorArgumentsAcceptsOnlyInteger()
);


function testDate($month, $day, $year): bool
{
    if (is_integer($month) && is_integer($day) && is_integer($year)) {
        if (checkdate($month, $day, $year)) {
            return true;
        }
    } else return false;
    return false;
}

function showTestResult($string, $float, $highInteger, $digit)
{
    if (testDate('x', 1, 99) || testDate(1, 'x', 99) || testDate('x', 1, 99)) {

    }
}

echo testDate(2, 01, 99);