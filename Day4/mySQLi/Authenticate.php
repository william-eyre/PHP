<?php

include('PDO_Database.php');

$db = new PDO_Database();


session_start();
$error = '';
if(isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error = "Username or password is invalid";
    }
    else
    { //to protect from sql injection
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($connection, $username);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($connection, $password);


        //query the DB for the user!
        $result = queryNameAndPassword($username,$password);
        var_dump($result);
        $row = mysqli_num_rows($result);

        if($row == 1 )
        {
            $_SESSION['login_user'] = $username;
            $_SESSION['userdata'] = $result;
        }
        else
        {
            $error = "Username or password is invalid";
        }
        $result->close();
        $connection->close();
    }
}