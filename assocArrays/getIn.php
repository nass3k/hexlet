<?php

function getIn($data, $arr)
{
    $current = $data;
    foreach ($arr as $key) {
        if ((!is_array($current)) || !array_key_exists($key, $current)) {
            return null;
        }
        else {
            $current = $current[$key];
        }
    }
    print_r($current);
}



$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

getIn($data, ['undefined']);        // => null
getIn($data, ['user']);             // => 'ubuntu'
getIn($data, ['user', 'ubuntu']);   // => null
getIn($data, ['hosts', 1, 'name']); // => 'web2'
getIn($data, ['hosts', 0]);         // => ['name' => 'web1']
