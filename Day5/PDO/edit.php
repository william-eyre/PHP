<?php
require('form_class.php');
include ('Authenticate.php');

$frm = new FormClass();
$id = $_SESSION['edit_id'];
$flag = $_SESSION['flag'] ?? '';

unset($_SESSION['flag']);

$user = $db->queryById($id);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<head><title>Edit page</title></head>
<body>
<?php
if(empty($_POST['update']))
{
    echo "Edit page for: {$_SESSION['edit_id']}<br />";

    $formStart = $frm->startForm('','post') . PHP_EOL .
        $frm->addLabelFor('First Name:') .
        $frm->addInput('text','first_name', ($flag ? '' : $user->__get('first_name'))) .
        PHP_EOL .
        $frm->addLabelFor('Last Name:') .
        $frm->addInput('text','last_name', ($flag ? '' : $user->__get('last_name'))) .
        PHP_EOL .
        $frm->addLabelFor('Username:') .
        $frm->addInput('text','username', ($flag ? '' : $user->__get('username'))) .
        PHP_EOL .
        $frm->addLabelFor('Password:') .
        $frm->addInput('text','password', ($flag ? '' : $user->__get('password'))) .
        PHP_EOL .
        $frm->addInput('submit', 'update','Update') .
        $frm->endForm();

    echo $formStart;
}
else
{
    if($flag && isset($_POST['update']))
    {
        $db->InsertIntoUser($_POST['first_name'], $_POST['last_name'],
                             $_POST['username'], $_POST['password']);
        {
            header('Location: profile.php');
            exit();
        }
    }
//    else
//    {
//        header('Location: ' . $_SERVER['PHP_SELF']);
//        exit();
//    }

     else
    {
        if (isset($_POST['update'])) ;
        {
            if ($db->editUser($id, $_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['password'])) {
                header('Location: profile.php');
                exit();
            }
        }
    }
}
?>
</body>
</html>
