<html>

    <title>Hidden 1</title>
</head>
<body>
<?php
$var1 = "awesome";
$var2 = "bang";


if(!isset($_POST['submit']))
{
    ?><form method="post" action="Hidden_form2.php">
    <!--hidden fields-->
    <input type="hidden" name="$var1" value="<?php echo $var1; ?>" />
    <input type="hidden" name="$var2" value="<?php echo $var2; ?>" />
    <input type="submit" name="submit" value="BANG IT!" />

    </form>
    <?php
}


?>
</body>
</html>