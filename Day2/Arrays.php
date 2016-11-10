<?php

$test[0] = "test";

$numbers = range(1, 5);
$letters = range('a', 'z');

$row0 = array("Will", "Eyre");
$row1 = array("Fox", "Mulder");
$twoD = array($row0, $row1);

$lastMet = array(array('fn' => 'Will', 'ln' => 'Eyre'),
                 array('fn' => 'Fox', 'ln', 'Mulder'));


//manipulate arrays

$array = ['fn' => 'Dana', 'ln' => 'Scully', 'role' => 'FBI Agent'];

$subset = array_slice($array, 1, 2);
print_r($subset);

if(array_key_exists('role', $array))
{
    echo "YES, role key exists!";
}

echo'<br>';

$removed = array_splice($array, 2, 1);
print_r($removed);

echo '<br>';

$first = 'awesome';
$second = 'dude';
$third = 'sweet';
$createArray = compact("first", "second", "third");
print_r($createArray);
