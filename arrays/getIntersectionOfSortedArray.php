<?php

function getIntersectionOfSortedArray($arr1, $arr2)
{
    $result = [];
    if (empty($arr1) || empty($arr2)) {
       return $result;
    }
    $i = 0;
    $j = 0;
    do {
        if ($arr1[$i] == $arr2[$j]) {
            $result [] = $arr1[$i];
            $i ++;
            $j ++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j ++;
        } else {
            $i ++;
        }
    } while ($i < sizeof($arr1) && $j < sizeof($arr2));

    return $result;
}



getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]); // [10, 24]

getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]); // []

getIntersectionOfSortedArray([], [2]); // []
