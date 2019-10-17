<?php

require __DIR__ . '/vendor/autoload.php';
use Funct\Collection;

function takeOldest($data, $usersNum = 1)
{
    $cmp = function ($a, $b) {
        $aTime = strtotime($a['birthday']);
        $bTime = strtotime($b['birthday']);
        return $aTime >= $bTime ? 1 : -1;
    };
    usort($data, $cmp);
    return Collection\firstN($data, $usersNum);
}

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

takeOldest($users);
