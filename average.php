<?php

function average(...$numbers)
{
    $size = count($numbers);
    $result = 0;

    if (empty($numbers))
        print_r(null . "<br>");

    for ($i = 0; $i < $size; $i++) {
        $result += $numbers[$i];
    }

    print_r($result / $size . "<br>") ;
}


average(0); // => 0
average(0, 10); // => 5
average(-3, 4, 2, 10); // => 3.25
average(); // => null
