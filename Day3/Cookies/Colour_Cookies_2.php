<!doctype html>
<html lang="en">
<head>
    <title>Preference Set</title>
</head>
<body>
<?php
    $colours = array('red' => '#FF0000',
                    'green' => '#00FF00',
                     'blue' => '#0000FF');

    $BackgroundName = $_POST['background'];
    $ForegroundName = $_POST['foreground'];

    setcookie('bg', $colours[$BackgroundName], time() + (86400 * 30));
    setcookie('fg', $colours[$ForegroundName], time() + (86400 * 30));
?> <p>thank you for selecting your colour scheme
    Background <?= $BackgroundName; ?><br />
    Foreground <?= $ForegroundName; ?>
</p>Click <a href="Colour_Cookies_3.php">Here</a> to see result.
</body>
</html>