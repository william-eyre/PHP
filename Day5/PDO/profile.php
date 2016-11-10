<?php
include('Session.php');

if(isset($_POST['delete']))
{
    if($db->deleteById($_POST['delete']))
    {
        header('Location:' . $_SERVER['PHP_SELF']);
        die;
    }
}

if(isset($_POST['edit']))
{
    $_SESSION['edit_id'] = $_POST['edit'];
    $_SESSION['flag'] = false;
    header('Location: edit.php');
    exit();
}

if(isset($_POST['new']))
{
    $_SESSION['flag'] = true;
    header('Location: edit.php');
    exit();
}
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
        $colHeader = array('id','first_name','last_name','username','password');
        ?>
        <form method="post">
        <button name='new' type='submit'>New</button><br/>
        <table>
            <tr>
            <?php
                foreach($colHeader as $h)
                    echo "<th>$h</th>";
                echo "</tr>";
                //will return all records
                $data = $db->queryAllUser();
                $size = count($data);

                //loop into multidimensional array
                for($i = 0; $i < $size; $i++)
                {
                    echo "<tr>";
                   $id = $data[$i]->__get('id');

                    $properties = array('id', 'first_name','last_name', 'username','password');
                    foreach($properties as $p)
                    {
                        echo "<td>" . $data[$i]->__get($p) . "</td>";
                    }
                    echo "<td><button name='edit' type='submit' value='$id'>Edit</button></td>";
                    echo "<td><button name='delete' type='submit' value='$id'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>

            </tr>
        </table>
            </form>
        <b><a href="terminate_Session.php">Log out</a></b>
        <b><a href="Games_library.php">Games library</a></b>
    </div>
</body>
</html>