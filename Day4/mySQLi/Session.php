<?php
session_start();
include('Db_connect.php');

$user_check = $_SESSION['login_user'];

$result = queryByName($user_check);

//retrieve data and return as associative array
$row = $result->fetch_array(MYSQLI_ASSOC);

$login_session = $row['username'];
