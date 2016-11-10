<?php
include('Session.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
</head>
<body>
    <div>
        <b>Welcome: <i><?php echo $login_session; ?></i></b>
        <?php
        $colHeader = array('ID','First Name', 'Last Name','Username','Password');
        ?>
        <table>
            <tr>
            <?php
                foreach($colHeader as $h)
                    echo "<th>$h</th>";
                echo "</tr>";

                //columns using session
                $data = queryByName($login_session);

                $result = $data->fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                foreach($result as $key => $value)
                    echo "<td>" . $value . "</td>"
            ?>
            </tr>
        </table>
        <b><a href="terminate_Session.php">Log out</a></b>
    </div>
</body>
</html>