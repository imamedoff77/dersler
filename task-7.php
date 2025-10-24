<?php

/* $temperatures = [20, 25, 15, 30, 35]; ekrana yalnız 25dən böyük olanları çıxar(25 daxil deyil)
 */


$temperatures = [20, 25, 15, 30, 35];

foreach ($temperatures as $temperature) {
    if ($temperature > 25) {
        echo $temperature.'<br>';
    }
}