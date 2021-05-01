<?php
namespace App;
class MyDate  
{
    private $day;
    private $month;
    private $year;

    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setDay($day)
    {
        if ($day <= 31) {
            $this->day = $day;
        } else {
            return false;
        }
    }

    public function setMonth($month)
    {
        if ($month <= 12) {
            $this->month = $month;
        } else {
            return false;
        }
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

}
