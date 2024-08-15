<?php

$alphabet = ['A','B','C','D','E','F','G',
             'H','I','J','K','L','M','N',
             'O','P','Q','R','S','T','U',
             'V','W','X','Y','Z'];

$sum = 0;

$userinput = $_POST['input'];

$originalUserinput = $userinput;

$userinput = preg_replace("/[^A-Za-z]/", '', $userinput);

$userinput = strtoupper($userinput);

$inputArray = str_split($userinput);

foreach ($inputArray as $value) {
  $sum += array_search($value, $alphabet) + 1;
}

echo "The Name ".$originalUserinput." is ".$sum." as a number.";
