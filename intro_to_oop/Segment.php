<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Segment
{
    public $beginPoint;
    public $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}

function reverse(Segment $segment)
{

    $temp = clone $segment->beginPoint;
    $segment->beginPoint = clone $segment->endPoint;
    $segment->endPoint = clone $temp;

    return $segment;
}



$segment = new Segment(new Point(1, 10), new Point(11, -3));
$reversedSegment = reverse($segment);

$reversedSegment->beginPoint; // => (11, -3)
$reversedSegment->endPoint; // => (1, 10)
