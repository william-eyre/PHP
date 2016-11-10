<?php

//if not post, get it is

if(!($_SERVER['REQUEST_METHOD'] == 'POST'))
{
    ?>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
        Number : <input type="text" name="number" /><br />
        Build that pyramid
        <input type="submit" name="Pyramid" value="Build">
    </form>
    <?php
}
else
{
    function create_pyramid($string, $level) {
        echo "<pre>";
        $level = $level * 2;
        for($i = 1; $i <= $level; $i ++) {
            if (!($i % 2) && $i != 1)
                continue;
            print str_pad(str_repeat($string, $i),($level - 1) * strlen($string), " " , STR_PAD_BOTH);
            print PHP_EOL;
        }
    }
}
