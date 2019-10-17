<?php

function countUniqChars($text)
{
    if ($text == ''){
        return 0;
    }
    $chars = str_split($text);
    $count = 0;
    $uniqChars = [];
    foreach ($chars as $char) {
        if (in_array($char, $uniqChars)) {
            continue;
        }
        $uniqChars[] = $char;
        $count++;
    }

    return $count;
}

$text1 = 'yyab';
countUniqChars($text1); // => 3

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // => 13

$text3 = '';
countUniqChars($text3); // => 0
