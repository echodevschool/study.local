<?php
function age($age = null) {
    if ($age == null || $age < 18) {
        return false;
    }

    return true;
}

function makesqr($value = null) {
    if ($value == null) {
        $value = 49;
    }
    echo sqrt($value);
}
function basket($prod) {
    $sumprice = $sumquantity = 0;
    $return = [];
    for ($i = 0; $i<count($prod); $i++) {
        $sumprice += $prod[$i]['price'] * $prod[$i]['quantity'];
        $sumquantity += $prod[$i]['quantity'];
    }
    $return['sumprice'] = $sumprice;
    $return['sumquantity'] = $sumquantity;
    return $return;
}