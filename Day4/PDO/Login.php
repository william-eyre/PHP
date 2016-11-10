<?php

include('Authenticate.php');

if(isset($_SESSION['login_user']))
{
    header("Location: profile.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Administration</title>
</head>
<body>
    <span><?php echo $error; ?></span>
    <form method="post" action="">
        <p>Please enter your login details</p>
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username"> <br/>
        <label>Password: </label>
        <input type="password" name="password" placeholder="Password"> <br/>
        <input type="submit" name="submit" value="Log-in">
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>