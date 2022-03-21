<?php
//циклы


for ($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}
echo '============================================<br>';

$counter = 0;
$boolean = 'hello'; //boolean
while($boolean === 'hello') {
    echo $counter.'<br>';
    $counter++;
    if ($counter === 10) {
        $boolean = 'world';
    }
}

echo '============================================<br>';

$counter = 0;

do {
    echo $counter.'<br>';
    $counter++;
}
while($counter < 10);

echo '============================================<br>';

$month = [
    2 => "февраль",
    3 => "март",
    4 => "апрель"
];

foreach ($month as $item) {
    if ($item == 3) {
        echo $item."<br>";
    }
}

echo '============================================<br>';

$people = [
    [
        "name" => "татьяна",
        "city" => "москва"
    ],
    [
        "name" => "сергей",
        "city" => "казань"
    ],
];

foreach ($people as $key => $item) {
   if ($item['name'] == 'татьяна') {
       unset($people[$key]);
   }
}

$people = [
    [
        "name" => "сергей",
        "city" => "казань"
    ],
];

echo '============================================<br>';

$otherProp = [
    [
        'name' => 'phone'
    ],
    [
        'name' => 'email'
    ],
    [
        'name' => 'download_menu_rus'
    ]
];

foreach ($otherProp as $key => $item) {
    switch ($item['name']) {
        case 'phone':
        case 'email':
        case 'leclick_id':
        case 'download_menu_rus':
        case 'download_menu_en':
        case 'energy_value':
            echo $item['name'];
            break;
    }
}
echo '============================================<br>';

