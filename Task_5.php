<?php

function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;
    $password = '';

  
    $password .= $lowercaseChars[rand(0, strlen($lowercaseChars) - 1)];
    $password .= $uppercaseChars[rand(0, strlen($uppercaseChars) - 1)];
    $password .= $numberChars[rand(0, strlen($numberChars) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

  
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

 
    $password = str_shuffle($password);

    return $password;


}

$generatedPassword = generatePassword(12);
echo "  Password: $generatedPassword";
