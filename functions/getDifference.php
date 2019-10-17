<?php


function getDifference($arr1, $arr2)
{
    $result = array_filter($arr1, function($element1) use ($arr2){
        return !in_array($element1, $arr2);
    });

    return array_values($result);
}


getDifference([2, 1], [2, 3]);
// → [1]
