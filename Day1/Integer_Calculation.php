<?php

//if not post, get it is

if(!($_SERVER['REQUEST_METHOD'] == 'POST'))
{
    ?>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
        Integer1 : <input type="text" name="int1" /><br />
        Integer2 : <input type="text" name="int2" /><br />
        [Operations]
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/">
    </form>
<?php
}
else
{
    checkEmpty();
    if(isset($_POST['mul']))
    {
        echo "The result is: " . $_POST['int1'] * $_POST['int2'];
    }
    if(isset($_POST['div']))
    {
        echo "The result is: " . $_POST['int1'] / $_POST['int2'];
    }
}
function checkEmpty()
{
    if(empty($_POST['int1']) || empty($_POST['int2']))
        die("You did not input all the integers!!!");
}
//
//function checkNumeric()
//{
//    if(!is_numeric();
//}
