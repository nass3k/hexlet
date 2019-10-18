<?php

function getX($point)
{
    return $point['x'];
}

function getY($point)
{
    return $point['y'];
}

function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

function makeSegment($point1, $point2)
{
    return ['beginPoint' => $point1, 'endPoint' => $point2];
}

function getBeginPoint($segment)
{
    return $segment['beginPoint'];
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $x = (getX($beginPoint) + getX($endPoint)) / 2;
    $y = (getY($beginPoint) + getY($endPoint)) / 2;

    print_r(makeDecartPoint($x, $y));
}


$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
getMidpointOfSegment($segment); // => (1.5, 1)
