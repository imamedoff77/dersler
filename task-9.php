<?php

/* $grades = [
    'Aysel' => [80, 90, 100],
    'Rauf' => [70, 60, 80],
];

Hər tələbənin ortalamasını yaz
 */


$grades = [
    'Aysel' => [80, 90, 100],
    'Rauf' => [70, 60, 80],
];

foreach ($grades as $name => $grade) {
    $avg = array_sum($grade) / count($grades);

    echo 'For: ' . $name . ' - Average grade: ' . $avg . '<br>';
}

