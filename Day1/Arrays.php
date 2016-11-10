<?php

$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";

$creator['Light bulb'] = "Edison";
$creator['Rotary Engine'] = "Wankel";
$creator['Toilet'] = "Crapper";

//associative array

$creators = array(
    'Light bulb' => "Edison",
    'Rotary Engine' => "Wankel",
    'Toilet' => "Crapper");

sort($creators);
foreach($creators as $invention => $inventor)
{
    echo "$inventor created $invention";
    echo "<br />";
}

asort($creators);
foreach($creators as $invention => $inventor)
{
    echo "$inventor created $invention";
    echo "<br />";
}

if(is_array($creators))
{
    var_dump($creators);
}