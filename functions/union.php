<?php

function union(...$arrays)
{
    return array_values(array_unique(array_merge($first, ...$rest)));
}


// union([3]); // => [3]
// union([3, 2], [2, 2, 1]); // => [3, 2, 1]
union(['a', 3, false], [true, false, 3], [false, 5, 8]); // => ['a', 3, false, true, 5, 8]
