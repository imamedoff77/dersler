<?php

//function getName($name, $age = 16)
//{
//    return 'My name is ' . $name . ', My age is ' . $age;
//}
//
//echo getName('Zeynəb', 27) . '<br>';
//echo getName('İbrahim');
//


//function calc(array $var): int
//{
//    return array_sum($var);
//}
//
//print_r(calc([1, 2, 3, 4]));


//function findUser(int $id): ?string {
//    if ($id === 1) {
//        return "Admin";
//    }
//    return null;
//}
//
//echo findUser(1);   // Admin
//echo findUser(5);   // (boş çıxış)

//
//function createUser($name, $age, $country)
//{
//    echo "$name, $age yaşında, $country-da yaşayır";
//}
//
//createUser(country: 'Azərbaycan', name: 'İbrahim', age: 28);

//function sum(...$numbers)
//{
//    return array_sum($numbers);
//}
//
//echo sum(1, 2, 3, 4); // 10
//


//function select(...$selectItems)
//{
//    print_r($selectItems);
//}
//
//select('id', 'title', 'price', 'created_at');

//function increase(&$x)
//{
//    $x++;
//}
//
//$num = 5;
//increase($num);
//echo $num;


//$items = ['id', 'name', 'price', 'category'];
//
//function removeCategory(array &$arr): void
//{
//    unset($arr[3]);
//}
//
//removeCategory($items);
//
//print_r($items);


//$greet = function($name = 'qwdq') {
//    return "Salam, $name!";
//};
//
//echo $greet('sadaspldpasldpaslp');


//$sum = fn($a, $b) => $a + $b;
//
//echo $sum(2, 3); // 5
//
//$prefix = "Salam";
//
//$greet = function($name) use ($prefix)  {
//    return "$prefix, $name!";
//};
//
//echo $greet("İlkin"); // Salam, İlkin!
//
//
//$test = 123;
//function getName()
//{
//    global $test;
//    echo $test;
//}
//
//getName();
//
//function counter() {
//    static $count = 0;
//    $count++;
//    echo $count;
//}
//
//counter(); // 1
//counter(); // 2
//counter(); // 3


//if (function_exists('array_sum')) {
//    echo "array_sum() mövcuddur";
//}
//echo '<br>';
//if (function_exists('mysqli_query')) {
//    echo "mysqli_query() mövcuddur";
//}

//function apply($callback, $value)
//{
//    return $callback($value);
//}
//
//
//function calcArraySize($item)
//{
//    return count($item);
//}
//
//
//echo apply('calcArraySize', [1, 2, 3, 4, 5]); // PHP


//function stop(): never {
//    exit('Proqram dayandırıldı.');
//}
