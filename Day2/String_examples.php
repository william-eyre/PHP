<?php

printf('%.2f', 30.567 );
echo'<br>';
printf('The hex value of %d is %x', 214, 214);
echo'<br>';

$month = 11;
$day = 1;
$year = 2016;
printf('%02d/%02d/%04d', $month, $day, $year);

echo'<br>';

$test = "Will eyre";

print(strtolower($test)) . "<br />";
print(ucfirst($test));
echo'<br>';
print(ucwords($test));
echo'<br>';
print(strtoupper($test));

echo'<br>';

$number = 5;
$string = "5";
if($number == $string)
    echo "equal";
if($number === $string)
    echo "nah bro";

echo'<br>';

$string2 = "PHP is awesome!";
if($string2 < $number)
    echo "true";

echo'<br>';

$string3 = "python is cool";
if(strcmp($string2, $string3) > 0)
    echo "strcmp is true";


if(strcasecmp($string2, $string3) < 0)
    echo "yes less than!";

echo '<br>';
//manipulate strings

$text = "When is the most awesome part of the day?";
$extract = substr($text, 17, 7);
print strtoupper($extract) . "<br>";

$sketch = <<< EndSketch
it is a period of civil between the rebels and the empire.
Rebel scum are invading the death star
A long time ago in a galaxy far far away.
EndSketch;

echo'<br>';

// print(substr_count($sketch, "e"));
$stringTest = "i like star wars";
$replace = substr_replace($stringTest, " boom ", 6,5);
echo $replace;

echo '<br>';

$testArray = explode(" ", $stringTest);
print_r($testArray);

echo '<br>';


$stringResult = implode(',', $testArray);
echo $stringResult;

echo '<br>';


$position = strpos($stringResult, 'g');
echo $position;