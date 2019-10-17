<?php

/*
Имеется набор данных, описывающих изменение температуры воздуха в одном городе в течении нескольких суток. Данные представлены массивом, в котором каждый элемент это массив содержащий список температур в течении одних суток.


<?php

$data = [
    [32, 17, 18],
    [11, 23, 23],
    [-1, -10, 2],
]

src\Arrays.php

Реализуйте функцию getIndexOfWarnestDay, которая находит самый теплый день (тот у которого была зарегистрирована максимальная температура в один момент времени) и возвращает индекс этого дня в исходном массиве.
*/

//Вариант 1

namespace App\Arrays;

// BEGIN (write your solution here)
function getIndexOfWarmestDay($data)
{
    if ($data === []) {
        return null;
    }
    foreach ($data as $key => $days) {
        $heats[] = max($days);
        if (max($heats) === max($days)) {
            $index = $key;
        }
    }
    return $index;
}
// END

//Вариант 2

// BEGIN
function getIndexOfWarmestDay(array $data)
{
    if (empty($data)) {
        return null;
    }

    $index = 0;
    $max = $data[0][0];
    foreach ($data as $key => $temperatures) {
        $current = max($temperatures);
        if ($current > $max) {
            $max = $current;
            $index = $key;
        }
    }

    return $index;
}
// END

