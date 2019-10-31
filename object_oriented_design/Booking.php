<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

class Booking
{
    private $dates = [];

    public function book($arrivalDay, $departureDay)
    {
        $carbonNewBegin = new Carbon($arrivalDay);
        $carbonNewEnd = new Carbon($departureDay);

        if ($this->canBook($carbonNewBegin, $carbonNewEnd)){
            $this->dates[] = [$carbonNewBegin, $carbonNewEnd];
            return true;
        }

        return false;
    }

    private function canBook($begin, $end)
    {
        if ($begin >= $end){
            return false;
        }
        foreach ($this->dates as [$bookedBegin, $bookedEnd]) {

            $isStartedAfter = $begin < $bookedEnd;
            $isEndedBefore = $end > $bookedBegin;
            if ($isStartedAfter && $isEndedBefore) {
                return false;
            }
        }
        return true;
    }
}


$booking = new Booking();
$booking->book('11-11-2008', '13-11-2008'); // true
$booking->book('12-11-2008', '12-11-2008'); // false
$booking->book('10-11-2008', '12-11-2008'); // false
$booking->book('12-11-2008', '14-11-2008'); // false
var_dump($booking->book('10-11-2008', '11-11-2008')); // true
$booking->book('13-11-2008', '14-11-2008'); // true
