<?php

function isContinuousSequence($coll)
{
    if (count($coll) <= 1) {
        return false;
    }
    $start = $coll[0];
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }

    return true;
}

isContinuousSequence([10, 11, 12, 13]);     // => true
isContinuousSequence([10, 11, 12, 14, 15]); // => false
isContinuousSequence([1, 2, 2, 3]);         // => false
isContinuousSequence([]);                   // => false
