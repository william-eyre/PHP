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
        $frm->addLabelFor('Name:') .
        $frm->addInput('text','name', ($flag ? '' : $user->__get('name'))) .
        PHP_EOL .
        $frm->addLabelFor('genre:') .
        $frm->addInput('text','genre', ($flag ? '' : $user->__get('genre'))) .
        PHP_EOL .
        $frm->addLabelFor('Developer:') .
        $frm->addInput('text','Developer', ($flag ? '' : $user->__get('Developer'))) .
        PHP_EOL .
        $frm->addLabelFor('description:') .
        $frm->addInput('text','description', ($flag ? '' : $user->__get('description'))) .
        PHP_EOL .
        $frm->addLabelFor('price:') .
        $frm->addInput('text','price', ($flag ? '' : $user->__get('price'))) .
        PHP_EOL .
        $frm->addInput('submit', 'update','Update') .
        $frm->endForm();

    echo $formStart;
}
else
{
    if($flag && isset($_POST['update']))
    {
        $db->InsertIntoGame($_POST['name'], $_POST['genre'],
            $_POST['Developer'], $_POST['price']);
        {
            header('Location: Games_library.php');
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
            if ($db->editGame($id, $_POST['name'], $_POST['genre'], $_POST['Developer'], $_POST['description'], $_POST['price'])) {
                header('Location: Games_library.php');
                exit();
            }
        }
    }
}
?>
</body>
</html>
