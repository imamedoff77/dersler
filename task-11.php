<?php

/* .$products = [
    ['name' => 'Kitab', 'price' => 12],
    ['name' => 'Qələm', 'price' => 2],
    ['name' => 'Çanta', 'price' => 20],
];

Fərz et ki, sifarişlərdi
Toplam price-ı tap
 */

$products = [
    ['name' => 'Kitab', 'price' => 12],
    ['name' => 'Qələm', 'price' => 2],
    ['name' => 'Çanta', 'price' => 20],
];


$totalPrice = 0;

foreach ($products as $product) {
    $totalPrice += $product['price'];
}


echo 'Total price: ' . $totalPrice . '<br>';