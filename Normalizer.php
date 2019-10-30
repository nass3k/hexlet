<?php
require __DIR__ . '/vendor/autoload.php';
use Tightenco\Collect\Support\Collection;




function normalize(array $row)
{
    return collect($row)
        ->map(function ($value) {
            return array_map('trim', $value);
        })
        ->map(function ($value) {
            return array_map('mb_strtolower', $value);
        })
        ->mapToGroups(function ($item, $key) {
            return [$item['country'] => $item['name']];
        })
        ->map(function ($cities) {
            return $cities->unique()->sort()->values();
        })
        ->sortKeys()
        ->toArray();

}


$raw = [
    [
        'name' => 'istambul',
        'country' => 'turkey'
    ],
    [
        'name' => 'Moscow ',
        'country' => ' Russia'
    ],
    [
        'name' => 'iStambul',
        'country' => 'tUrkey'
    ],
    [
        'name' => 'antalia',
        'country' => 'turkeY '
    ],
    [
        'name' => 'samarA',
        'country' => '  ruSsiA'
    ],
];

print_r(normalize($raw));
