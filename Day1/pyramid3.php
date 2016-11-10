<?php
if(!isset($_POST['submit']))
{
  ?>
please enter a number:
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="height" />
        <input type="submit" name="submit" value="Build"/>

    </form>
<?php
}
else
{
    $height = $_POST['height'];
    for($count = 0; $count <= $height; $count++)
    {
       $blanks = $height - $count;
        for($b = 0; $b < $blanks; $b++)  // creates the blank spaces between the numbers and the border
            echo "&nbsp;";

        for($v = 0; $v < $count; $v++)
            echo $count . "&nbsp;";  // lets the computer know how many times to count and then outputs that number the same as the value of the number
        if($count < $height)
            echo"<br />";
    }

}