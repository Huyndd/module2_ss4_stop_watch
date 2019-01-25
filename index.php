<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 25/01/2019
 * Time: 14:50
 */
include "StopWatch.php";

$arr = [];
for ($i = 0; $i < 10000; $i++) {
    $arr[] = $i * rand(1, 100000);
}

function selectionSortAscending($arr)
{
    // Lặp để sắp xếp
    for ($i = 0; $i < count($arr) - 1; $i++) {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        // Sau khi có vị trí nhỏ nhất thì đổi chỗ với vị trí thứ $i
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    return $arr;
}


$watch = new StopWatch();
echo "Start time: " . $watch->getStartTime() . "<br>";

selectionSortAscending($arr);

$watch->stopTime();
echo "End time: " . $watch->getEndTime() . "<br>";
echo "Elapsed time: " . $watch->getElapsedTime();


?>