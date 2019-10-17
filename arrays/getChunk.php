<?php

/*
Реализуйте функцию getChunked, которая принимает на вход массив и число, задающее размер чанка (куска). Функция должна вернуть массив, состоящий из чанков указанной размерности.

<?php

getChunked(['a', 'b', 'c', 'd'], 2);
// → [['a', 'b'], ['c', 'd']]

getChunked(['a', 'b', 'c', 'd'], 3);
// → [['a', 'b', 'c'], ['d']]

*/

namespace App\Arrays;

// BEGIN (write your solution here)
function getChunked($arr, $n) 
{
    $j=0;
    $result=[];
    foreach ($arr as $key => $item) {
        $arr2[$j]=$item;
        $j++;
        if ( ($j == $n) || ($key == sizeof($arr) - 1)) {
            $result[] = $arr2;            
            $j = 0;
            $arr2=[];
        }
    }
    return $result;
}
// END

// Variant 2

// BEGIN
function getChunked($arr, $size)
{
    $result = [];
    for ($i = 0; $i < ceil(sizeof($arr) / $size); $i += 1) {
        $result[] = array_slice($arr, $i * $size, $size);
    }

    return $result;
}
// END
