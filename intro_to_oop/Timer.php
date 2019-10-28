<?php

class Timer
{
    const SEC_PER_MIN = 60;
    const SEC_PER_HOUR = 60 * 60;

    private $seconds;
    private $minutes;
    private $hours;
    private $secondsCount;

    public function __construct($seconds, $minutes = null, $hours = null)
    {
        $this->seconds = $seconds;
        $this->minutes = $minutes * self::SEC_PER_MIN;
        $this->hours = $hours * self::SEC_PER_HOUR;

        return $this->secondsCount = $this->seconds + $this->minutes + $this->hours;
    }

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}


$timer = new Timer(10);
print_r($timer);
