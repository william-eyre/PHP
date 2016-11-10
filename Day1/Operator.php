<?php

$x = 8;
$y = 5;
$z = 6;

$difference = (($x + $y) * $z) - ($x + $y + $z);

print "Difference: " . $difference;
echo"<br />";
echo 10 . 5.47;  //concatinates the two numbers together, basically puts them together
echo"<br />";
echo "10 songs" - 1;

echo"<br />";

$var = 10;
echo $var++; //return before it adds
echo ++$var; //adds then prints the value
echo $var--;
echo --$var;
echo"<br />";

class Person
{
    private $name = "Will";
    private $age = 20;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
}

$first = new person;
$arrayTest = (array) $first;
print_r($arrayTest);

echo"<br />";

$castBack = (object) $arrayTest;
echo $castBack->name;

echo $castBack->age;

$i = 10;

$test = $i < 20 ? "YES!" : "NO!";
echo $test;





