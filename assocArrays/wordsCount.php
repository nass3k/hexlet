<?php

function wordsCount($sentence)
{
    $words = explode(" ", $sentence);
    $result = [];
    foreach ($words as $word) {
        if (empty($word)) {
            continue;
        }
        if (!array_key_exists($word, $result)) {
            $result[$word] = 1;
        } else {
            $result[$word]++;
        }
    }

    return $result;
}


wordsCount(''); // []
wordsCount('  one two one'); // ['one' => 2, 'two' => 1]
wordsCount('  one      two       one     '); // ['one' => 2, 'two' => 1]
