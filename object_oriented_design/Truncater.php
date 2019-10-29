<?php

class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    private $options = [];

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    public function truncate(string $text, $options = [])
    {
        $options = array_merge($this->options, $options);
        $substr = substr($text, 0, $options['length']);
        if (strlen($substr) < strlen($text)) {
            return $substr . $options['separator'];
        } else {
            return $substr;
        }
        print_r($substr);
    }
}

$truncater = new Truncater();

$actual = $truncater->truncate('one two', ['length' => 6]);
$actual = $truncater->truncate('one two', ['separator' => '.']);
$text = 'one two';
