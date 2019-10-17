<?php

function getSameParity($arr)
{
    $result = [];
    if (empty($arr)) {
        return $result;
    }
    if ($arr[0] % 2 != 0) {
        foreach ($arr as $item) {
          if ($item % 2 != 0) {
            $result[] .= $item;
          }
        }
      return $result;
    }if ($arr[0] % 2 == 0) {
        foreach ($arr as $item) {
          if ($item % 2 == 0) {
            $result[] .= $item;
          }
        }
      return $result;
    }

}

getSameParity([]);        // => []
getSameParity([1, 2, 3]); // => [1, 3]
getSameParity([1, 2, 8]); // => [1]
getSameParity([2, 2, 8]); // => [2, 2, 8]
