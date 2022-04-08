<?php

echo "Задача 1"."<br>";

$array = ['php', 'git', 'mysql', 'symfony'];
foreach ($array as $key => $item) {
    echo $item.'<br>';
}
echo '<br>';

echo 'Задача 2'.'<br>';

$numb = [10,20,30,40,50,60,70,80,90,100];
$summ = 0;
    foreach ($numb as $item){
        $summ = $summ + $item;
    }
    echo $summ.'<br>'.'<br>';


echo 'Задача 3'.'<br>';


function x($counter, $counter2) {
    if ($counter == 7) {
        echo '123';
    }
    if ($counter == 10) {
        echo "321";
    }
    echo "Йо-хо-хо выпили $counter бутылка рома. Осталось $counter2";
}

//$a = 'Йо-хо-хо выпили ';
//$b = ' бутылка рома.';
//$c = 'Осталось ';
$counter = 1;
$counter2 = 12;
while ($counter <= 13) {
    x($counter, $counter2);
    $counter++;
    $counter2--;
}

echo '<br>';

echo 'Задача 4'.'<br>';

function makesqr($value = null) {
    if ($value == null) {
        $value = 49;
    }
    echo sqrt($value);
}
//вызов функции
makesqr(255);

echo 'Квадратный корень 49 = '.makesqr(49);
echo 'Квадратный корень 64 = '.makesqr(64);
echo 'Квадратный корень 81 = '.makesqr(81);



echo '<br>'.'<br>';
echo 'Задача 5'.'<br>';



// 1 бутылка
// 2, 3 ,4 бутылки
// 5 бутылок
function declOfNum($value, $words) {
    $num = $value % 100;
    if ($num > 19) {
        $num = $num % 10;
    }

    $out = $value . ' ';
    switch ($num) {
        case 1:  $out .= $words[0]; break;
        case 2:
        case 3:
        case 4:  $out .= $words[1]; break;
        default: $out .= $words[2]; break;
    }

    echo $out;
}

declOfNum(1, ['бутылка', 'бутылки', 'бутылок']);


