<?php 
$countries = [
    'Bangladesh' => 'Dhaka',
    'India' => 'New Delhi',
    'China' => 'Beijing',
    'Japan' => 'Tokyo',
    'Korea' => 'Seoul',
    'Russia' => 'Moscow'

];

foreach($countries as $country => $capital){
    echo "The Capital of $country is $capital" ."\n";
}