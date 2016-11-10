<?php
$a = 10;  //$a has a true value
$b = true;
$c = ""; //$c has a false value
$d = false;

var_dump((bool) $a);
var_dump((bool) $c);

if(is_bool($b))
{
    echo '$b is a boolean';
}