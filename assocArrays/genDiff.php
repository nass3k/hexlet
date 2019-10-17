<?php

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

function genDiff($arr1, $arr2)
{
    $result = [];
    $arrKeys=array_keys(union($arr1, $arr2));
    $arr1Keys = array_keys($arr1);
    $arr2Keys = array_keys($arr2);
    $arr2Values = array_values($arr2);

    foreach ($arrKeys as $key) {
        if (!in_array($key, $arr1Keys) && (in_array($key, $arr2Keys))) {
            $result[$key] = 'added';
        } elseif (in_array($key, $arr1Keys) && (!in_array($key, $arr2Keys))) {
            $result[$key] = 'deleted';
        } elseif ($arr1[$key] != $arr2[$key]) {
            $result[$key] = 'changed';
        } elseif ($arr1[$key] == $arr2[$key]) {
            $result[$key] = 'unchanged';
        }
    }

    return $result;
}

$result1 = ['one' => 'eon', 'two' => 'two', 'four' => true];
$result2 = ['two' => 'own', 'zero' => 4, 'four' => true];

print_r(union($result1, $result2));
