<?php

function getSameCount($arr1, $arr2)
{
    $result = [];
    foreach ($arr2 as $value) {
        if (in_array($value, $arr1, true)) {
            $result[] = $value;
        }
    }
    return count(array_unique($result));
}

getSameCount([], []); // 0
getSameCount([4, 4], [4, 4]); // 1
getSameCount([1, 10, 3], [10, 100, 35, 1]); // 2
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // 3
getSameCount([1, 2], []);
getSameCount([0], ['one', 'two']);
getSameCount([5, 3, 3], ['one', 'two']);
getSameCount([1, 2, 3], [2, 8, 10]);
getSameCount([1, 8, 2, 3], [2, 8, 10]);
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]);
getSameCount([1, 1, 1, 2, 3], [1, 1]);
