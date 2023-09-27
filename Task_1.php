<?php

function animal($text){
 
}
$text = "The qucik brown fox jumps over the lazy dog";
animal($text);

//for lowercase
$lowercaseString = strtolower($text);
echo $lowercaseString ;

//for replace
$newString = str_replace("brown", "red", $lowercaseString);

echo $newString;





