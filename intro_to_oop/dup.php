<?php

class Point
{
    public $x;
    public $y;
}

function dup($point)
{
    $clonedPoint = new Point();
    $clonedPoint->x = $point->x;
    $clonedPoint->y = $point->y;

    return $clonedPoint;
}


$point1 = new Point();
$point2 = dup($point1);

echo $point1 == $point2; // true
echo $point1 === $point2; // false
