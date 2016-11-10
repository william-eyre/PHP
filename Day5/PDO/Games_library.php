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
    <title>Games</title>
</head>
<body>
<title>Games Library</title>
<table>
    <tr>
        <b>Welcome: <i><?php echo $login_session; ?></i></b>
        <?php
        $colHeader = array('id','name','genre','developer','description', 'price');

        foreach($colHeader as $header)
        {
            echo "<td><b>$header</b></td>";
        }

        $data = $db->queryAllGame();
        $size = count($data);

        for($i = 0; $i < $size; $i++)
        {
            echo "<tr>";
            $id = $data[$i]->__get('id');

            foreach($colHeader as $column)
            {
                echo "<td>" . $data[$i]->__get($column) . "</td>";
            }
            echo "</tr>";

            echo "<td><button name='edit' type='submit' value='$id'>Edit</button></td>";
            echo "<td><button name='delete' type='submit' value='$id'>Delete</button></td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>
<b><a href="profile.php">Profile page</a></b>
</body>
</html>