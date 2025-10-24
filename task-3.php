<?php


/* göstərirəm bunu sadəcə
$numbers = [1, 3, 5, 7]; məsəlçün belə array var
Mütləq deyil bunu foreach-lə döngüyə salasan.
Arraydəki elementlərin sıra nömrəsi olduğu üçün for və ya digər şeylərlə də döndərə bilərsən
Nümunə olaraq for-la döndürək
Forda nə lazım idi? 3 parametr
for ($i =0 ; $i <= count($numbers)-1; $i++){
echo $numbers[$i];
}

Nəyə görə count -1? Əvvəl də dediyim kimi, uzunluq sıra nömrəsindən həmşə 1 vahid böyük olur
Sıra 0dan başladığı üçün
Bir başa count dəyərini yazsan, numbers içində 4 element var
$numbers[4] oxumağa çalışacaq və olmadığı üçün partlayacaq))

Şərtə fikir ver <= yazmışam
Yəni bu şərt ödənirsə hələ də davam edir döngü
Amma = yazmasaydım, sadəcə < yazsaydım, onda count-1 yox, bir başa count($numbers] yaza bilərdim
Çünki, i 4ə çatanda 4<4 şərti düz olmadığı üçün artıq döngü işləməyəcəkdi */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . '<br>';
}
echo '<hr>';
foreach ($numbers as $number) {
    echo $number . '<br>';
}

echo '<hr>';

$i = 0;
while ($i < count($numbers)) {
    echo $numbers[$i] . '<br>';
    $i++;
}
echo '<hr>';

$i = 0;
do {
    echo $numbers[$i] . '<br>';
    $i++;
} while ($i < 0);