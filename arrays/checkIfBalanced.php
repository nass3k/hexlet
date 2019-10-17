<?php

function checkIfBalanced($expression)
{
    $balancedBrakets = ['()'];
    $stack = [];
    $size = strlen($expression);
    for ($i = 0; $i < $size; $i++) {
        $curr = $expression[$i];
        if ($curr == '(') {
            array_push($stack ,$expression[$i]);
        } elseif ($expression[$i] == ')') {
            $prev = array_pop($stack);
            $pair = "{$prev}{$curr}";
            if (!in_array($pair, $balancedBrakets)){
                return false;
            }
        }
    }

    return sizeof($stack) == 0;
}


checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // => true
checkIfBalanced('(4 + 3))'); // => false
