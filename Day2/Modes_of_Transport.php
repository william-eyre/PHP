<html>
    <head>
        <title>Modes of transport</title>
    </head>
    <body>
        <h2>How do you get around?</h2>
            <?php
            session_start();
            if(!isset($_POST['submit'])) {
                $travel = array(
                    'Car',
                    'Boat',
                    'Train'
                );
                foreach($_SESSION['temp'] as $t)
                {
                    echo"<li>$t</li>\n";
                }


                ?>
                <form method="post" action="Modes_of_Transport.php"
                <p>How do you travel around the world?</p>
                <input type="text" name="Transport"/>
                <input type="submit" name="submit" value="submit"/>
                <?php
                foreach ($travel as $t) {
                    echo "<input type=\"hidden\" name=\"travel[]\" value =\"$t\" />\n";
                }
            } else {
                $temp = $_POST['travel'];
                $_SESSION['temp'] = $temp;
                getTravelMethod($_SESSION['temp']);
                header('Location: Modes_of_Transport.php');
            }
        ?>
        </form>
    </body>
</html>


<?php
function getTravelMethod($travel)
{

    $added = explode(',', $_POST['Transport']);
    array_splice($travel, count($travel), 0, $added);


}
?>