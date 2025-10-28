<?php

/* 1. Ən sadə funksiya

Task: sayHello() adlı funksiya yaz ki, “Salam, dünya!” çap etsin.
Bonus: onu 3 dəfə çağır. */


//function sayHello()
//{
//    echo "Salam, dünya! <br>";
//}
//
////for ($i = 1; $i <= 3; $i++) {
////    sayHello();
////}
//
//$i = 1;
//do {
//    sayHello();
//    $i++;
//} while ($i <= 3);
////
//


/* 2. Parametrli funksiya

Task: greet($name) funksiyası yaz ki, ad qəbul edib “Salam, $name!” yazsın. */

//function greet(string $name = 'Ibrahim'): void
//{
//    echo 'Salam ' . $name;
//}
//
//greet('Zeynəb');


/* 3. İki parametrli və nəticə qaytaran funksiya

Task: sum($a, $b) funksiyası iki ədəd toplayıb nəticəni return etsin.
Çağırarkən nəticəni ekrana yaz. */

//function sum(int|float $a, int|float $b): int|float
//{
//    return $a + $b;
//}
//
//echo sum(3.5, 5);


/* 4. Default dəyərlər

Task: greet($name = "Qonaq") funksiyası ad verilməsə belə “Salam, Qonaq!” çap etsin. */

//function greet($name = 'Qonaq')
//{
//    echo 'Salam, '.$name;
//}
//
//greet('Test');

/* 5. Data tip göstəriciləri

Task: multiply(int $a, int $b): int funksiyası yaz.
Əgər arqumentlər integer olmasa, PHP error atacaq. Sına. */


/* 6. Nullable və Union types

Task:
getLength(string|array|null $input): ?int funksiyası yaz.
Əgər $input string-dirsə strlen, array-dirsə count, null-dursa null qaytarsın. */

//
//function getLength(string|array $input = null): ?int
//{
//    if (gettype($input) == 'string') {
//        return strlen($input);
//    }
//
//    if (gettype($input) == 'array') {
//        return count($input);
//    }
//
//    return null;
//}
//
//
//echo getLength('salam') . '<br>';
//echo getLength([1, 2, 3]) . '<br>';
//echo gettype(getLength()) . '<br>';


/* 7. Named arguments

Task: createUser($name, $age, $country) funksiyasını createUser(country: 'Azərbaycan', name: 'Leyla', age: 20) kimi çağır. */


/*  8. Variadic function (...$args)

Task: sumAll(...$numbers) funksiyası yaz ki, istənilən sayda ədəd qəbul edib hamısını toplayıb return etsin. */

//function calculate(...$numbers)
//{
//    return array_sum($numbers);
//}
//
//echo calculate(1,2,3,4,5);
//

//
//function joinFromArray(...$items)
//{
//    return implode('-', $items);
//}
//
//echo joinFromArray('Zeynəb', 'Hüseyn', 'Ibrahim');


/* 9. Anonymous function (Closure)

Task: $square adlı anonim funksiya yaz ki, verilən ədədin kvadratını qaytarsın.
Məs: $square(4) → 16 */

//
//$square = function ($x) {
//    return pow($x, 2);
//};
//
//echo $square(5);


/* 10. Arrow function

Task: $triple = fn($n) => $n * 3; şəklində arrow function yaz və ədəd daxil edərək sına. */
//
//$triple = fn($n) => $n * 3;
//
//echo $triple(4);


//11. Closure + use istifadəsi

//$greeting = 'Salamla';
//$greet = function ($name) use ($greeting) {
//    echo $greeting . ' ' . $name;
//};
//
//echo $greet('John Doe');
//

/*  12. Recursive function

Task: factorial($n) funksiyası yaz ki, ədədin faktorialını hesablamaq üçün özünü çağıraraq işləsin. */


//function factorial($n)
//{
//    if ($n == 0 || $n == 1) {
//        return 1;
//    }
//
//    return $n * factorial($n - 1);
//}
//
//
//echo factorial(10);


/* 13. Pass by value və reference

Task:
İki funksiya yaz:

increaseValue($x) – $x++ edib çap etsin.

increaseRef(&$x) – reference ilə $x dəyərini dəyişsin.   */

//function increaseValue($x)
//{
//    $x++;
//
//    echo $x;
//}
//
//increaseValue(15);

//
//$x = 15;
//
//function increaseRef(&$x)
//{
//    $x--;
//}
//
//increaseRef($x);
//
//echo $x;


/*  14. Static dəyişənli funksiya

Task: counter() funksiyası yaz ki, hər çağırıldıqda sayğac 1 artsın və əvvəlki dəyəri yadda saxlasın. */

//
//function counter()
//{
//    static $counter = 0;
//
//    $counter++;
//
//    echo $counter . '<br>';
//}
//
//counter();
//counter();
//counter();
//counter();


/* 15. Global və local scope

Task:
$siteName = "techxeber.az" dəyişəni yarat.
showSite() funksiyasında bu dəyəri 3 fərqli üsulla göstər:

global $siteName

$GLOBALS['siteName']

parametr kimi ötürmə */


$siteName = "techxeber.az";
$test = 'test123';

function showSite($siteamePar)
{
//    global $siteName;
//    echo $siteName;
//    echo $GLOBALS['siteName'];

    echo $siteamePar;
}

showSite($siteName);
