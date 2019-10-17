<?php

function calculateAverage($arr)
{
  if(!empty($arr)){
    $sum = 0;
    $countElements = sizeof($arr);
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum / $countElements;
  }
  return null;
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

calculateAverage($temperatures); // => 38.5
