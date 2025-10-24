<?php

$arr1 = [1, 3, 5, 7, 9, 9, 1];

$arr2 = [2, 4, 6, 8];

$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 8, 3, 2, 31, 432423, 12312, 7, 9];


$result = [];

//
//if (in_array(8, $arr1)) {
//    echo 'var';
//} else {
//    echo 'yoxdur';
//}




foreach ($arr1 as $item) {
    if (!in_array($item, $result)) {
        $result[] = $item;
    }
}

foreach ($arr2 as $item) {
    if (!in_array($item, $result)) {
        $result[] = $item;
    }
}
foreach ($arr3 as $item) {
    if (!in_array($item, $result)) {
        $result[] = $item;
    }
}


print_r($result);