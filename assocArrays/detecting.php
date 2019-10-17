<?php

function findWhere($arrMass, $pairs)
{
    $result=null;
    // дистракчеринг
    //[$key1 => $values1, $key2 => $values2] = $pairs;
    $keys=array_keys($pairs);
    //[$key1, $key2] = $keys;
    foreach ($arrMass as $element) {
        if (($element[$key1]==$pairs[$key1])&&($element[$key2]==$pairs[$key2])) {
            //var_dump($element);
            return $element;
        }
    }
    return $result;
}
