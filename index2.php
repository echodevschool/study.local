<?php
// boolean - логические
// float - вещественные
// array - массив
// object - объект

echo "Задача 1"."<br>";

$a = 10;
$b = 20;
$c = 30;

if ($a > $b || $a < $c) {
    echo "а среднее";
} elseif ($b > $a || $b < $c) {
    echo "b среднее";
} elseif ($c > $a || $C < $b) {
    echo "с среднее";
}

echo "<br>"."<br>";
echo "Задача 2"."<br>";

$month = [
    "2" => "февраль",
    "3" => "март",
    "4" => "апрель"
];

echo implode(", ",$month);

echo "<br>"."<br>";
echo "Задача 3"."<br>";

$monthnumb = array_flip($month);

echo implode(", ", $monthnumb);

echo "<br>"."<br>";

echo "Задача 4"."<br>";

$tea = "пока я с тобой общаюсь, в моей кружке чай";
$result = str_replace("пока я с тобой общаюсь, в моей кружке чай", $tea, "сегодня суббота, в моей кружке пиво");
echo $result;

echo "<br>"."<br>";

echo "Задача 5"."<br>";
$people = [
    0 => [
        "name" => "татьяна",
        "city" => "москва"],
    1 => [
        "name" => "сергей",
        "city" => "казань"
    ]
];


