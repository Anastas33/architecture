<?php
// Создать массив на миллион элементов и отсортировать его различными способами. Сравнить скорости.

include 'QuickSort.php';
include '08QuickSort.php';
include '06Bubble.php';
include 'randArray.php';
include 'Heapsort.php';
include 'insertSort.php';
include 'PigeonholeSort.php';
include 'MergeSort.php';
include 'InsertSortSPL.php';
include 'HeapSplSort.php';
include 'DualSelectSort.php';
include 'CombSort.php';

function getArr($count, $minRand, $maxRand): array
{
    $myArray = [];
    for ($i = 0; $i < $count; $i++) {
        do {
            $num = mt_rand($minRand, $maxRand);
        } while (in_array($num, $myArray));
        $myArray[] = $num;
    }
    return $myArray;
}

$arr = getArr(1000000, 0, 100);
$lastIndex = count($arr) - 1;

$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
insertion_sort($arr);
echo "Сортировка вставками: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSortLesson($arr);
echo "Сортировка быстрая наша: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "Сортировка быстрая чужая: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
sort($arr);
echo "Сортировка из PHP: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
arsort($arr);
echo "Сортировка из PHP: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
pigeonholeSort($arr);
echo "Сортировка голубиная: " . (microtime(true) - $start) . PHP_EOL;
