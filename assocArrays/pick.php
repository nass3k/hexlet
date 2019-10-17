<?php

function pick($data, $arr)
{
    $result = [];
    foreach ($data as $key => $value) {
        if (in_array($key, $arr)) {
            $result[$key] = $value;
        }
    }

    print_r($result);
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];

pick($data, ['user']);       // → ['user' => 'ubuntu']
pick($data, ['user', 'os']); // → ['user' => 'ubuntu', 'os' => 'linux']
pick($data, []);             // → []
pick($data, ['none']);       // → []
