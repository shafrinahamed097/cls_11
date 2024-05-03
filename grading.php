<?php

$mathMarks = [
    'John' => 85,
    'Jane' => 92,
    'Mark' => 78,
    'Sarah' => 95,
    'David' => 76

];

function calculateGrade($marks) {
    if($marks >=90){
        return 'A';
    } else if($marks >= 80){
        return 'B';
    } else if($marks >= 70){
        return 'C';
    } else if($marks >= 60){
        return 'D';
    } else {
        return 'F';
    }
}

foreach($mathMarks as $name => $marks){
    $grade = calculateGrade($marks);
    echo $name . " - " . $marks . " - " . $grade . "\n" ."\n";
}
