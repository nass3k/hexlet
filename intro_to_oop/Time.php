<?php

class Time
{
    private $hours;
    private $minutes;

    public function __construct ($hours, $minutes)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public function __toString()
    {
        return "{$this->hours}:{$this->minutes}";
    }

    public static function fromString($time)
    {
        [$hours, $minutes] = explode(':', $time);
        return new self($hours, $minutes);
    }
}

$time = new Time(10, 15);
var_dump($time); // => 10:15
$time = Time::fromString('10:23');
var_dump($time);
