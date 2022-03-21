<?php

function loop($data = null) {
    foreach ($data as $key => $item) {
        if ($item['name'] == 'татьяна') {
            unset($data[$key]);
        }
    }

    return $data;
}

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

$people2 = [
    [
        "name" => "елена",
        "city" => "москва"
    ],
    [
        "name" => "николай",
        "city" => "казань"
    ],
];

$arr = loop();
$people2 = loop($people2);