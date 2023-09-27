<?php
 
$studentGrades = [
    "Student1" => ["Math" => 15, "English" => 82, "Science" => 78],
    "Student2" => ["Math" => 81, "English" => 75, "Science" => 40],
    "Student3" => ["Math" => 73, "English" => 30, "Science" => 88],
];

 
function calculateAndPrintAverageGrades($grades) {
    foreach ($grades as $student => $subjectGrades) {
        $total = array_sum($subjectGrades);
        $average = $total / count($subjectGrades);
        echo "$student's average grade is: $average\n";
    }
}

 
calculateAndPrintAverageGrades($studentGrades);
