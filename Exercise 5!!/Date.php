<?php declare(strict_types=1);


class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        if(!checkdate($month, $day, $year)){
            exit('Wrong date!'.PHP_EOL);
        }
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function displayDate()
    {
        return $this->month.'/'.$this->day.'/'.$this->year.PHP_EOL;
    }

}