<?php

function bubbleSort($arr)
{
    $sizeOfArr = sizeof($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $sizeOfArr - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $temp;
                $swapped = true;
            }
        }
        $sizeOfArr--;
    }while ($swapped);

    return $arr;
}


bubbleSort([]); // => []
bubbleSort([3, 10, 4, 3]); // => [3, 3, 4, 10]
