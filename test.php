<?php
$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');
$a =  "<table>\n";
foreach ($meal as $key => $value) {
    $a = $a. "<tr><td>$key</td><td>$value</td></tr>\n";
}
$a = $a. '</table>';
echo  $a;