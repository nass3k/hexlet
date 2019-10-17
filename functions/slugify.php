<?php

require __DIR__ . '/vendor/autoload.php';
use Funct\Strings;
use Funct\Collection;

function slugify($string)
{
    $tolower = Strings\toLower($string);
    $array = explode(" ", $tolower);
    $compact = Collection\compact($array);
    $dashed = implode("-", $compact);
    print_r($dashed);
}


slugify(''); // ''
slugify('test'); // 'test'
slugify('test me'); // 'test-me'
slugify('La La la LA'); // 'la-la-la-la'
slugify('O la      lu'); // 'o-la-lu'
slugify(' yOu   '); // 'you'
