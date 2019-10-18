<?php

function calculateDistance($point1, $point2)
{
    $deltaX = $point2[0] - $point1[0];
    $deltaY = $point2[1] - $point1[1];
    $sqrRes = ($deltaX ** 2) + ($deltaY ** 2);

    return sqrt($sqrRes);
}


$point1 = [0, 0];
$point2 = [3, 4];
print_r(calculateDistance($point1, $point2)); // => 5
