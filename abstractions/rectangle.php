<?php

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

function makeRectangle($startPoint, $width, $height)
{
    return [
        'startPoint' => $startPoint,
        'width' => $width,
        'heigth' => $height
    ];
}

function getStartPoint($rectangle)
{
    return $rectangle['startPoint'];
}

function getWidth($rectangle)
{
    return $rectangle['width'];
}

function getHeight($rectangle)
{
    return $rectangle['heigth'];
}

function getTopRightPoint($rectangle)
{
    return [
        'x' => getStartPoint($rectangle)['x'] + getWidth($rectangle),
        'y' => getStartPoint($rectangle)['y']
    ];
}
function getBottomRightPoint($rectangle)
{
    return [
        'x' => getStartPoint($rectangle)['x'] + getWidth($rectangle),
        'y' => getStartPoint($rectangle)['y'] - getHeight($rectangle)
    ];
}
function getBottomLeftPoint($rectangle)
{
    return [
        'x' => getStartPoint($rectangle)['x'],
        'y' => getStartPoint($rectangle)['y'] - getHeight($rectangle)
    ];
}
function containsOrigin($rectangle)
{
    $container = [];
    $container[] = getQuadrant(getStartPoint($rectangle));
    $container[] = getQuadrant(getTopRightPoint($rectangle));
    $container[] = getQuadrant(getBottomRightPoint($rectangle));
    $container[] = getQuadrant(getBottomLeftPoint($rectangle));
    $result = array_unique($container);
    return count($result) === 4 ? true : false;
}


$p = makeDecartPoint(0, 1);
$rectangle = makeRectangle($p, 4, 5);

containsOrigin($rectangle); // false

$rectangle2 = makeRectangle(makeDecartPoint(-4, 3), 5, 4);
containsOrigin($rectangle2); // true
