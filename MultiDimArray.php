<?php

echo '<title>Multidimention / 2D Array</title>';


// $multiArray = [
//     ['first array Value', 'second array Value'],

//     [10, 55, 80, 90, 15 ,'Oct',],

//     ['last array Value', 'PHP', 'CIT 2205']
// ];


// echo '<pre>';
//     print_r($multiArray[0][1]);
//     echo $multiArray[0][1];
// echo '</pre>';



// foreach($multiArray as $ValueOne){
//     foreach($ValueOne as $ValueTwo){
//         echo $ValueTwo. '<br>';
//     }
// }



$array = [
    // 'firstArry'=>[10,20,30,40],
    // 'SecondArry'=>[50,60,70,80],
    // 'ThirdArry'=>[90,100,110,120]

    'fruits'=>['apple', 'orange', 'Jam', 'Mango', 'Strawbrery'],
    'foods' =>['Burger', 'Pizza', 'sandwich', 'Noodles', 'Rice'],
    'sweets'=>['Chamchom', 'Rasgulla', 'Mithai', 'Semai', 'Chana']
];

// echo '<pre>';
//     print_r($array);    
// echo '</pre>';



foreach($array['fruits'] as $MultiNames){
   echo $MultiNames .'<br>';
}

echo '<br>';













?>