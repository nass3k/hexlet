<?php

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    if ($operationName == 'reset')
        return $arr = [];
    if ($operationName == 'remove'){
        unset($arr[$index]);
        return $arr;
    }
    if ($operationName == 'change'){
        $arr[$index] = $value;
        return $arr;
    }


    // END
}


$cities = ['moscow', 'london', 'berlin', 'porto'];

// Сброс в пустой массив
apply($cities, 'reset'); // => []

// удаление значения по индексу
apply($cities, 'remove', 1); // => ['moscow', 'berlin', 'porto']
// изменение значения по индексу
apply($cities, 'change', 0, 'miami'); // => ['miami', 'london', 'berlin', 'porto']
