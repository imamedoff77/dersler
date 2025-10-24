<?php

/* $numbers = [2, 4, 6, 8]; hər rəqəmi 2-yə vur və başqa bir array-ə yığ nəticələri. Sonra həmin 2ci array-i ekrana çıxar */

$numbers = [2, 4, 6, 8];

$numbers2 = [];

foreach ($numbers as $number) {
    $numbers2[] = $number * 2;
}

print_r($numbers2);