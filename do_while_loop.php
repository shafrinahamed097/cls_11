<?php 

$fruits = ['apple', 'banana','orange','grape', 'mango'];
$total_fruits = count($fruits);

$i=0;
do{
    $i+=1;
    echo $i."\n";
    if($i==5){
        break;
    }
} while ($i <10);