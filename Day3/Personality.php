<?php


$attrs =$_GET['attributes'] ?? array();
//if(isset($_GET['attributes'])) {
//    //check whether the checkbox has been selected
//    $attrs = $_GET['attributes'];
//}
//    if(!is_array($attrs))
//        $attrs = array();

    function makeCheckBoxes($name, $query, $options)
    {
        foreach($options as $key => $value)
        {
            $checked = in_array($key, $query) ? "checked" : '';
            //string that represents checkbox html
            $str ="<input type='checkbox' name='$name' value='$key'";
            if ($checked != '')
            {
                $str .= "checked=\"$checked\" />";
            }
            else
                $str .= "/>";

            $str .= "$value<br />";
            echo $str;
        }
    }

    $perAttributes = array(
        'perky' => 'Perky',
        'moody' => 'Moody',
        'sleepy' => 'Sleepy',
        'happy' => 'Happy',
        'boomy' => 'Boomy');

?>

<html>
<head>
    <title>Personality</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        select your personality attributes:<br />
        <?php
            makeCheckBoxes('attributes[]', $attrs, $perAttributes);
        ?>
        <input type="submit" type="submit" value="Record!" />

</body>
</html>