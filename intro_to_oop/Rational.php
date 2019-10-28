<?php

class Rational
{
    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return $this->denom;
    }

    public function add($rat)
    {
        return new Rational(
            $this->numer * $rat->denom + $rat->numer * $this->denom,
            $this->denom * $rat->denom
        );
    }

    public function sub($rat)
    {
        return new Rational(
            $this->getNumer() * $rat->getDenom() - $rat->getNumer() * $this->getDenom(),
            $this->getDenom() * $rat->getDenom()
        );
    }
}


$rat1 = new Rational(3, 9);
$rat1->getNumer(); // => 3
$rat1->getDenom(); // => 9

$rat2 = new Rational(10, 3);

print_r($rat3 = $rat1->add($rat2)); // => Абстракция для рационального числа 99/27
$rat3->getNumer();         // => 99
$rat3->getDenom();         // => 27

$rat4 = $rat1->sub($rat2); // => Абстракция для рационального числа -81/27
$rat4->getNumer();         // => -81
$rat4->getDenom();         // => 27
