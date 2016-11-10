<?php
include('Authenticate.php');

$user_check = $_SESSION['login_user'];
$result = $_SESSION['userdata'];

$login_session = $result->__get('first_name');
