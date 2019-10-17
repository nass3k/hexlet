<?php

function getSortedNames($users)
{
    $result = [];
    foreach ($users as ['name' => $name]) {
        $result[] = $name;
    }
    sort($result);

    return $result;
}


$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

print_r(getSortedNames($users)); // => ['Bronn', 'Eiegon', 'Reigar', 'Sansa']
