<?php

/* 4.array içində müxtəlif tipdə datalar yaz(string, integer, array, null, float, bool və s.)

Sonra arraydəki hər bir elementin tipini echo ilə yazdır */

$items = [
    1,
    'str',
    true,
    false,
    [

    ],
    null,
    0.89 // float, double
];

foreach ($items as $item) {
    echo gettype($item) . '<br>';
}

