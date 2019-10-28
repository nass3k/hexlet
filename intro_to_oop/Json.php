<?php

use App\Safe;

function json_decoder($json, $assoc = false)
{
    // BEGIN (write your solution here)
    if (json_last_error() !== JSON_ERROR_NONE)
        throw new \Exception("json error!");

    try {
        json_decode($json);
    } catch (\Exception $e) {
        print_r($e);
    }
    // END
}

$data = json_decoder('{ key": "value" }', true);
// ['key' => 'value']
