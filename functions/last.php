<?php

$last = function(string $string){
    if ($string === '')
        return null;

    print_r($string[-1]);
};


$last('');     // => null
$last('0');    // => 0
$last('210');  // => 0
$last('pow');  // => w
$last('kids'); // => s
