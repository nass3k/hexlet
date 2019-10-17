<?php
require __DIR__ . '/vendor/autoload.php';
use Funct\Collection;

function getManWithLeastFriends($users)
{
    if(empty($users))
        return null;

    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
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
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

print_r(getManWithLeastFriends($users));
// => ['name' => 'Keit', 'friends' => []];
