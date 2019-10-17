<?php


function without($items, ...$values)
{
    $reduced = array_reduce($items, function ($acc, $item) use ($values) {
        if (!in_array($item, $values)) {
            $acc[] = $item;
        }
        return $acc;
    }, []);
    return array_values($reduced);
}

print_r(without([3, 4, 10, 4, 'true'], 4)); // => [3, 10, 'true']
print_r(without(['3', 2], 0, 5, 11)); // => ['3', 2]
print_r(without([3, 4, 10, 'true'], 3, 4));
