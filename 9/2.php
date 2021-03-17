<?php

// Реализовать удаление элемента массива по его значению. Обратите внимание на возможные дубликаты!

function getArr($count, $minRand, $maxRand): array
{
    $myArray = [];
    for ($i = 0; $i < $count; $i++) {
        $myArray[] = mt_rand($minRand, $maxRand);
    }
    return $myArray;
}

function treeSort(array $list): array
{
    $tree = new SplMinHeap();
    foreach ($list as $n) {
        $tree->insert($n);
    }
    $list = [];
    while ($tree->valid()) {
        $list[] = $tree->top();
        $tree->next();
    }
    return $list;
}

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $n++;

        $base = floor(($start + $end) / 2);

//        echo "Проверяется элемент с индексом: $base" . PHP_EOL;

        if ($myArray[$base] == $num) {
//            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
//    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n -- $myArray[$base] -- $num" . PHP_EOL;
    return null;
}

function unsetNum($myArray, $num): array
{
    while (binarySearch($myArray, $num)) {
        if (($key = array_search($num, $myArray)) !== FALSE) {
            unset($myArray[$key]);
        }
    }
    return $myArray;
}

$arr = getArr(20, 0, 100);
$arr = treeSort($arr);
$num = mt_rand(0, 100);
$newArr = unsetNum($arr, $num);
var_dump($arr);
var_dump($num);
var_dump($newArr);



