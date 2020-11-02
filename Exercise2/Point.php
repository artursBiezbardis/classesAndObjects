<?php declare(strict_types=1);

class Point
{
    private int $xPoint;
    private int $yPoint;

    public function __construct(int $xPoint, int $yPoint)
    {
        $this->xPoint = $xPoint;
        $this->yPoint = $yPoint;
    }

    static function swapPoints(object $p1, object $p2): void
    {
        $p1Array = [$p1->getXPoint(), $p1->getYPoint()];
        $p2Array = [$p2->getXPoint(), $p2->getYPoint()];
        $p1->setXPoint($p2Array[0]);
        $p1->setYPoint($p2Array[1]);
        $p2->setXPoint($p1Array[0]);
        $p2->setYPoint($p1Array[1]);


    }

    /**
     * @return int
     */
    public function getXPoint(): int
    {
        return $this->xPoint;
    }

    /**
     * @param mixed $xPoint
     */
    public function setXPoint(int $xPoint): void
    {
        $this->xPoint = $xPoint;
    }

    /**
     * @return int
     */
    public function getYPoint(): int
    {
        return $this->yPoint;
    }

    /**
     * @param mixed $yPoint
     */
    public function setYPoint(int $yPoint): void
    {
        $this->yPoint = $yPoint;
    }
}