<?php
require __DIR__ . '/vendor/autoload.php';
use Ds\Stack;

function compare($seq1, $seq2)
{
    $stack1 = new Stack();
    for ($i = 0; $i < strlen($seq1); $i++) {
        $curr = $seq1[$i];

        if ($curr == '#') {
            $stack1->pop();
        } else {
            $stack1->push($curr);
        }
    }

    $stack2 = new Stack();
    for ($i = 0; $i < strlen($seq2); $i++) {
        $curr = $seq2[$i];

        if ($curr == '#') {
            $stack2->pop();
        } else {
            $stack2->push($curr);
        }
    }
    return array_reverse($stack1->toArray()) === array_reverse($stack2->toArray());
}

var_dump(compare('ab#c', 'ab#c')); // true

// '' === ''
var_dump(compare('ab##', 'c#d#')); // true

// 'c' === 'b'
var_dump(compare('a#c', 'b')); // false

// 'cd' === 'cd'
var_dump(compare('#cd', 'cd')); // true

// function compare($text1, $text2)
// {
//     $evaluatedText1 = evaluate($text1);
//     $evaluatedText2 = evaluate($text2);
//
//     return $evaluatedText1 === $evaluatedText2;
// }
//
// function evaluate($text)
// {
//     $stack = new \Ds\Stack();
//     for ($i = 0, $length = mb_strlen($text); $i < $length; $i++) {
//         $current = $text[$i];
//         if ($current != '#') {
//             $stack->push($current);
//         } elseif (!$stack->isEmpty()) {
//             $stack->pop();
//         }
//     }
//
//     return implode('', $stack->toArray());
// }
