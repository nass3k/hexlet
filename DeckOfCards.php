<?php

require __DIR__ . '/vendor/autoload.php';

use Tightenco\Collect\Support;

class DeckOfCards
{
    private $cards;

    public function __construct(array $types)
    {
        $this->cards = collect($types)
             ->map(function ($card) {
                 return array_fill(0, 4, $card);
             })
             ->flatten();
    }

    public function getShuffled(): array
    {
        return $this->cards->shuffle()->all();
    }
}

$deck = new DeckOfCards([2, 3]);
print_r($deck);
$deck->getShuffled(); // [2, 3, 3, 3, 2, 3, 2, 2]
print_r($deck);
$deck->getShuffled(); // [3, 3, 2, 2, 2, 3, 3, 2]
