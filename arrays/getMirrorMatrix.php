<?php
/*
Реализуйте функцию getMirrorMatrix, которая принимает двумерный массив (матрицу) и возвращает массив, изменённый таким образом, что правая половина матрицы становится зеркальной копией левой половины, симметричной относительно вертикальной оси матрицы. Для простоты условимся, что матрица всегда имеет чётное количество столбцов и количество столбцов всегда равно количеству строк.

<?php

getMirrorMatrix([
  [11, 12, 13, 14],
  [21, 22, 23, 24],
  [31, 32, 33, 34],
  [41, 42, 43, 44],
]);

// → [
//     [11, 12, 12, 11],
//     [21, 22, 22, 21],
//     [31, 32, 32, 31],
//     [41, 42, 42, 41],
//   ]


*/
//Variant 1

<?php
namespace App\Arrays;

// BEGIN (write your solution here)
function getMirrorMatrix($arr)
{
    $n = sizeof($arr) / 2;
    //$result = [[]];
    foreach ($arr as $key => $row) {
        for ($i = 0; $i <= $n - 1; $i++) {
            //var_dump($arr[$key][$i]);
            $arr[$key][$n + $i] = $arr[$key][$n - 1 - $i]; 
        }
    }
    return $arr;
}
// END


//Variant 2
// BEGIN

function getMirrorMatrix($arr)
{
    $size = sizeof($arr);
    $mirrorArr = [];
    for ($i = 0; $i < $size; $i += 1) {
        for ($j = 0; $j < $size / 2; $j += 1) {
            $mirrorArr[$i][$j] = $arr[$i][$j];
            $mirrorArr[$i][$size - $j - 1] = $arr[$i][$j];
        }
    }

    return $mirrorArr;
}
// END
