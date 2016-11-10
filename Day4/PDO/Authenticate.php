<?php
include('PDO_Database.php');

$db = new PDO_Database();

$error = '';

session_start();

if(isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error = "Username or password is invalid";
    }
    else
    {

        $username = stripcslashes($_POST['username']);

        $password = stripcslashes($_POST['password']);

        //query the DB for the user!
        $result = $db->queryByNameAndPassword($username,$password);


        if($result)
        {
            $_SESSION['login_user'] = $username;
            $_SESSION['userdata'] = $result;
        }
        else
        {
            $error = "Username or password is invalid";
        }
    }
}