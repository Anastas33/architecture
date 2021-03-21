<?php

// Поиск элемента массива с известным индексом.
$array = [2, 5, 4, 9];
echo $array[2]; // O(1)

// Дублирование массива через foreach.
$newArray = [];
foreach ($array as $value) {
    array_push($newArray, $value); // O(n)
}
// Рекурсивная функция нахождения факториала числа.
function getFactorial($int)
{
    if ($int == 0) {
        return 1;
    } elseif ($int < 0) {
        echo 'Ошибка, число не может быть отрицательным';
    } else {
        return $int * getFactorial($int-1); // O(n)
    }
}