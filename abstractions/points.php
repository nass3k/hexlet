<?php

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

function getRadius($point)
{
    return $point['radius'];
}
function getAngle($point)
{
    return $point['angle'];
}
function getX($point)
{
    return getRadius($point) * cos(getAngle($point));
}
function getY($point)
{
    return getRadius($point) * sin(getAngle($point));
}




$x = 4;
$y = 8;

// $point хранит в себе данные в полярной системе координат
$point = makeDecartPoint($x, $y);

// Здесь происходит преобразование из полярной в декартову
getX($point); // 4
getY($point); // 8
