<?php

echo "Задача 1"."<br>";

$prod = [
    ["name"=>"Молоко", "price"=>100, "quantity" => 2],
    ["name"=>"Сахар", "price"=>150, "quantity" => 10],
    ["name"=>"Яйца", "price"=>85, "quantity" => 1],
];



$bascket = basket($prod);


echo "Общая сумма покпок ".$bascket['sumprice'].'<br>';
echo "Общее количество товара ".$bascket['sumquantity'];

echo '<br>';
echo 'Задача 2'.'<br>';

$number = [1, 2, 5, -10, -50, 11, 20, -100];
$newnumb = [];

function less($number){
    $more = [];
    foreach ($number as $key => $item){
        if ($item >= 0){
            $more[] = $item;
        }
    }
    return $more;
}

echo '<br>';
echo 'Задача 3'.'<br>';

$name = 'Иванов Иван Петрович';
function namesh($name){
    $b = explode(' ', $name);
    return $b[0].' '.mb_substr($b[1], 0, 1).' '.mb_substr($b[2], 0 ,1).' ';
}
$nameshort = namesh($name);

echo $nameshort;


function year($age) {
    if (((int)$age % 4 == 0 && (int)$age % 100!=0) || ((int)$age % 400 == 0)){
        return true;
    } else {
        return false;
    }
}

echo '<br>';
//$x = '123';
echo year('ghghgh');
