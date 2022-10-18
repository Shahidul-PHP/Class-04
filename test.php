<?php 

echo '<title>Array in PHP</title>';


$array = [10,20,30,4.8,50,60,70,80, 'shovon','islam', 'CSE', true, 5.6];


  echo '<pre>';
     print_r($array);
        var_dump($array);
  echo '</pre>';

foreach($array as $key=>$test){

    echo $key + 1 ." => ".$test.'</br>';
}
































?>