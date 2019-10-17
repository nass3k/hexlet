<?php

function addPrefix(array $arr, $prefix)
{
    $result = [];
    for($i=0, $count = count($arr); $i < $count; $i++){
        $result[$i] =  "{$prefix} {$arr[$i]}";
    }
    return $result;
}


$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
// => ['Mr john', 'Mr smith', 'Mr karl'];
