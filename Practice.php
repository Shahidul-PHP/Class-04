<?php 

echo '<title>Array Practice PHP</title>';


// fill Array function

$a1 = array_fill(10, 4, "PHP Array");
$b1 = array_fill(0, 3, "this is filled array");


echo '<pre>';
    print_r($a1);
        echo "<br>";
    print_r($b1);

  '</pre>';



// filter Array function

function test_odd($var)
{
    return ($var & 2);
}

$a1 = array(1, 2,3,5,7,8);
print_r(array_filter($a1, "test_odd"));


// flip Array function

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$result = array_flip($a1);


// intersect Array function

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("f" => "green", "g" => "blue", 'h'=> "yellow");

$result = array_intersect($a1, $a2);

echo '<pre>';
    print_r($result);
'</pre>';


// keys Array function

$a = array("5" => "XC90", "6" => "X5", "7" => "Highlander");
print_r(array_keys($a));


// Map Array function

function myfunction($v)
{
    return ($v * $v);
}

$numbers = [2,3,5,6,8,9,15];

echo '<pre>';
    print_r(array_map("myfunction", $numbers));
echo '</pre>';


// pop and merge Array function

$a1 = array("red", "green","orange", "purple");
$a2 = array("blue", "yellow", "koiccha", "sada");

 //print_r(array_merge($a1, $a2));

 print_r(array_pop($a1));



// push Array function

$a = array("red", "green", "blue");

array_push($a,"new one", "another new one", "osthir");

print_r($a);


// replace Array function

$a1 = array("red", "green");
$a2 = array("blue", "yellow");

print_r(array_replace($a1, $a2));




// implode Array function

$stringCon = ['shahidul', 'islam', 'khan'];

echo implode(',',$stringCon);


// explode Array function


$extension = 'abc.png';

print_r(explode('.',$extension));











?>