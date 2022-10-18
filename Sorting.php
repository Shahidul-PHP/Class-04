<?php

echo '<title>Array Sorting Practice PHP</title>';


$cars = array("Amra", "Cat", "Doll","Ball", "Fail", "Jamil","Kamil","Flower","Hasan","Garments");
rsort($cars);

$length = count($cars);
for ($x = 0; $x < $length; $x++) {
    echo $x;
    echo $cars[$x];
    echo "<br>";
}








































?>