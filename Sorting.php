<?php

echo '<title>Array Sorting Practice PHP</title>';


$cars = array("amra", "cat", "eagle","doll","bll", "fail", "jamil","kamil","flower","hasan","garments");
sort($cars);

$length = count($cars);
for ($x = 0; $x < $length; $x++) {
    echo $cars[$x];
    echo "<br>";
}




$fruits = ["jam", "apple", "mango", "blackberry", "corn", "strawbrery", "dragon"];

sort($fruits);

 $length = count($fruits);

for($a = 0; $a < $length; $a++){
    echo $fruits[$a];
    echo '<br>';
}




$age = array("adam"=>"3", "sadam"=>"15", "dadam"=>"5", "fam"=>"2","gam"=>"1","badam"=>"6","cadam" => "50");

krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}




// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order


// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key


// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

























?>