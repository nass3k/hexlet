<?php

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function sayPrimeOrNot($num)
{
    $text = isPrime($num) ? 'yes' : 'no';
    print_r($text);
}

sayPrimeOrNot(7); // => yes
sayPrimeOrNot(4); // => no
sayPrimeOrNot(2);
sayPrimeOrNot(3);
sayPrimeOrNot(8);
sayPrimeOrNot(4);
sayPrimeOrNot(1);
sayPrimeOrNot(0);
sayPrimeOrNot(-3);
