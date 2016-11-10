<?php

function counter()
{
    static $count = 0;  // static means that the value can be changed outside of the function
    return $count++;
}
//when function ends $count is not destroyed (displays 0 - 4)
for ($i = 0; $i <= 5; $i++)
{
    print counter();
}


//function searchUsers($whichUser = 'all')
//{
//    if $whichUser = 'all';
//    echo "all users";
//}
//
echo "<br>";

//parameter by reference
function double(&$value)
{
    return $value = $value << 1;
}
$a = 10;
double($a);
echo $a;

echo"<br>";


$names = array("Will", "Badger", "Giraffe");
function &find($n)
{
    global $names;
    return $names[$n];
}
$person =& find(2);
echo $person;