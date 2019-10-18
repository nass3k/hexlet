<?php

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}

function makeRational($number, $denom)
{
    $ratNum = $number / gcd($number, $denom);
    $ratDen = $denom / gcd($number, $denom);
    return [
        'ratNum' => $ratNum,
        'ratDen' => $ratDen
    ];
}

function getNumer($rat)
{
    return $rat['ratNum'];
}

function getDenom($rat)
{
    return $rat['ratDen'];
}

function add($rat1, $rat2)
{
    return makeRational(
       getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1),
       getDenom($rat1) * getDenom($rat2)
   );
}

function sub($rat1, $rat2)
{
    return makeRational(
        getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1),
        getDenom($rat1) * getDenom($rat2)
    );
}



$rat1 = makeRational(3, 9);
getNumer($rat1); // => 1
getDenom($rat1); // => 3

$rat2 = makeRational(10, 3);

$rat3 = add($rat1, $rat2);
RatToString($rat3); // => 11/3

$rat4 = sub($rat1, $rat2);
RatToString($rat4); // => -3/1
