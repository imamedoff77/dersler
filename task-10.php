<?php

/* $students = [
    ['name' => 'Aysel', 'age' => 20],
    ['name' => 'Rauf', 'age' => 22],
    ['name' => 'Leyla', 'age' => 19],
];
Yaşı 20 və yuxarıların adını yaz
 */

$students = [
    ['name' => 'Aysel', 'age' => 20],
    ['name' => 'Rauf', 'age' => 22],
    ['name' => 'Leyla', 'age' => 19],
];

foreach ($students as $student) {
    if ($student['age'] >= 20) {
        echo $student['name'] . '<br>';
    }
}