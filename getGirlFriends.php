<?php

require __DIR__ . '/vendor/autoload.php';
use Funct\Collection;

function getGirlFriends($users)
{
    $friends = array_map(function($friend){
        return $friend['friends'];
    }, $users);
    $friendsFlatten = Collection\flatten($friends);

    $girlFriends = array_filter($friendsFlatten, function($girl){
        return $girl['gender'] === 'female';
    });

    return array_values($girlFriends);
}


$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

var_dump(getGirlFriends($users));
# => Array (
#      ['name' => 'Mira', 'gender' => 'female'],
#      ['name' => 'Aria', 'gender' => 'female'],
#      ['name' => 'Keit', 'gender' => 'female']
# )
