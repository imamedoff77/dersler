<?php


/*
 * Fərz et ki, əlində hər hansı uzunluqda bir array var. Sən götür necə istəyirsənsə
Count- array içindəkiləri sayırdı
Countdan istifadə etmədən, arrayin uzunluğunu istəyirəm( ip ucu foreach)
 *
 *
 *
 * */

$arr = [1,2,3,4,5,6,7,8];

$i = 0;
foreach ($arr as $value) {
    $i++;
}

echo $i;