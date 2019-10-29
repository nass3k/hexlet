<?php


// function toStd(array $data):object
// {
//     return (object) $data;
// }

function toStd(array $data)
{
    $std = new \stdClass();
    foreach ($data as $key => $value) {
        $std->$key = $value;
    }

    return $std;
}
$data = [
    'key' => 'value',
    'key2' => 'value2',
];
$config = toStd($data);

var_dump($config->key); // value
var_dump($config->key2); // value2
