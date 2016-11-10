<?php

$currentMonth = date('F', time());

var_dump($currentMonth);
if(strcmp($currentMonth, 'October') == 0)
{
    echo "We are in October!!!!!";
}
else if(strcmp($currentMonth, 'November') == 0)
    echo "FUTURE";

//Switch statement

$name = "Will";
switch ($name)
{
    case 'Will':
        break;
    case 'David':
        print "BOOM Will and David";
        break;
}
echo"<br />";

$func = 'test1';
switch($func) {
    case 'test1':
        test1();
        break;
    case 'test2':
        test2();
        break;
}

echo"<br />";

function test1()
{
    echo "Function 1 is called";
}
function test2()
{
    echo "Function 2 is called";
}

$func();

//while
$i = 0;
while ($i <= 100)
{
    if($i == 15)
        break;

    $total += $i;
    $i++;
}
echo "Total: " . $total;
                //0,1,2,3
$data = array("This", "is", "it",".");
for($i = 0; $i < sizeof($data); $i++)
{
    echo $data[$i];
}
echo "<br />";

foreach ($data as $d)
{
    echo $d;
}

echo "<br />";

class PersonArray
{
    var $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    public function getObjectVar()
    {
        var_dump(get_object_vars($this));
    }
}

$alex = new PersonArray('Alex Kennedy');
$john = new PersonArray('John Doe');

$people = array($alex,$john);

foreach($people as $person)
{
    $person->getObjectVar();
    echo ",";
}