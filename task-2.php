<?php


/*yalnız cüt ədədlərin toplam cəmini istəyirəm */

$nums = [1, 2, 3, 4, 5, 6];

$total = 0;
foreach ($nums as $num) {
    if ($num % 2 == 0){
        $total += $num;
    }
}

echo $total;