<?php
require __DIR__ . '/vendor/autoload.php';
use Stringy\Stringy as S;


function getQuestions($text)
{
    $stringy = S::create($text);
    $lines = $stringy->lines();
    $filtered = collect($lines)->filter(function($line) {
        return $line->endsWith('?');
    });

    return implode("\n", $filtered->all());

    return $filtered;
}


$text = <<<HEREDOC
lala\r\nr
ehu?
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
HEREDOC;

$result = getQuestions($text); // "ehu?\none two?"
var_dump($result);
// ehu?
// one two?
