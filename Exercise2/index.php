<?php declare(strict_types=1);
require_once 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

Point::swapPoints($p1, $p2);

echo "(" . $p1->getXPoint() . ", " . $p1->getYPoint() . ")" . PHP_EOL;
echo "(" . $p2->getXPoint() . ", " . $p2->getYPoint() . ")" . PHP_EOL;