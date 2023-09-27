<?php
 
function removeEvenNumbers(&$array) {
    $array = array_filter($array, function($number) {
        return $number % 2 !== 0;
    });
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);

 
print_r($numbers);
