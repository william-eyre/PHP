<html
    <head>
    <title>Date Month Year Drop</title>
    </head>
    <body>
        <?php
        if(!($_SERVER['REQUEST_METHOD'] === 'POST'))
        { ?>
        <form method="post" action="Date_year_drop_down.php"
               <!--select date-->
        <select name="dateOption"
        <?php
            for($d = 0; $d <= 31; $d++)
            {
                if($d < 10)      // this is creating the list for the days of the month
                    $dd = 0 . $d;
                else
                    $dd = $d;

        ?> <option value="<?php echo "$dd" ?>"><?php echo "$dd"; ?></option>
         <?php  } ?>
        </select>
            <?php
            $months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December');
            ?>
            <select name="monthOption">
                <?php
                foreach($months as $m => $value)
                    echo "<option value=$m>" . $value . "</option>";
                ?>
            </select>
            <select name="yearOption">
                <?php
                for($y = 1990; $y <= date('Y'); $y++)
                {
                ?><option value="<?php echo "$y" ?>"><?php echo "$y" ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="submit" value="BOOM">
        </form>

        <?php } else {
            echo $_POST['dateOption'] . " " . $_POST['monthOption'] . " " . $_POST['yearOption'];
        }
    ?>
    </body>
</html>
