<?php

//grab the Db constants
include('DB_constant.php');
//create a connection to our DB php week
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

function queryNameAndPassword($username,$password)
{
    global $connection;
    return mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
}

function queryByName($username)
{
    global $connection;
    return mysqli_query($connection, "SELECT * FROM user WHERE username='$username'");

}