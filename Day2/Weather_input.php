<html>
    <head>
        <title>Arrays Weather input</title>
    </head>
    <body>
    <h2>How's your weather?</h2>
    <?php
    if(!isset($_POST['submit']))
        {
            ?> <form method="post" action="Weather_input.php">
                <p>Please enter your information: </p>
                City:  <input type="text" name="city" />
                Month: <input type="text" name="month" />
                Year:  <input type="text" name="year" />
            <P> Please select the kinds of weather you experienced:</p>
            <?php getWeatherType('Sunshine', 'Clouds', 'Rain'); ?>
                <input type="submit" name="submit" value="Submit"/>
            </form>
     <?php } else {
        $inputData = array($_POST['city'],
                           $_POST['month'],
                           $_POST['year']);
        echo "In $inputData[0] in the month of $inputData[1], $inputData[2],  you observed the following weather: <br /><ul>";
            $weathers = $_POST['weather'];
        foreach($weathers as $w)
            echo "<li>$w</li>\n";
        echo "</ul>";
        }
    ?>
    </body>
</html>

<?php
function getWeatherType()
{

//    $weatherType = array( 'Sunshine', 'Clouds', 'Rain', 'Hail', 'Snow', 'Cats', 'Dogs', 'Meatballs', 'Love');
    $weatherType = func_get_args();
    foreach ($weatherType as $value)
        echo "<input type='checkbox' name='weather[]' value='$value' />$value<br/>";
}
?>



<!---->

<!--<input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br/>-->
<!--<input type="checkbox" name="weather[]" value="clouds" />Cloud<br/>-->
<!--<input type="checkbox" name="weather[]" value="rain" />Rain<br/>-->
<!--<input type="checkbox" name="weather[]" value="hail" />Hail<br/>-->
<!--<input type="checkbox" name="weather[]" value="snow" />Snow<br/>-->
<!--<input type="checkbox" name="weather[]" value="wind" />Wind<br/>-->
<!--<input type="submit" name="submit" value="Submit" />-->