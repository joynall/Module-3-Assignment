<?php
  
$grades = [85, 92, 78, 88, 95];

 
function sortGradesDescending(&$array) {
    rsort($array);
}

 
sortGradesDescending($grades);
 
print_r($grades);
