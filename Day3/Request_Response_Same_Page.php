<html>
<head>
        <title>Form input and response - favourite City</title>
    <style>
        .error {color: #FF0000 ;}
    </style>
</head>
<body>
<?php
// set document cache and proxy expiration to NEVER
    $now = time();
    $then = gmstrftime("%a, %d %b %Y %Y:%H:%S", $now + 365 * 846440);
    header("Expire: $then");

    //define validation variables

    $city = $population = $cityErr = $populationErr = "";
    $validation = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //retrieve info
    if(empty($city = $_POST['city']))
    {
        $cityErr = "City is required!";
    }
    else
    {
        if(!preg_match("/^[a-zA-Z]*$/", $_POST['city']))
        {
            $cityErr = "City should only contain letters and spaces";
        }
        else
        {
            $city = $_POST['city'];
            $validation++;
        }
    }

    if(empty($_POST['population']))
    {
        $population = "Population is required";
    }
    else
    {
        if(!preg_match('/^\d+$/', $_POST['population']))
        {
            $populationErr = "Population should only contain positive numbers";

        }
        else {
            $validation++;
            $population = $_POST['population'];
        }
    }


//    echo "Your favourite city is " . $city . "<br/>";
//    echo "City population is " . $population . "<br/>";
}
//else
{
   // die("Cannot accept any other method");
}

//if($_SERVER['REQUEST_METHOD'] == 'GET')

?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Please enter your favourite city: <br/>
        <input type="text" name="city" value=""/>
        <span class="error">* <?php echo $cityErr; ?></span><br/>
        Please enter the cities population: <br/>
        <input type="text" name="population" value=""/>
        <span class ="error">* <?php echo $populationErr; ?></span><br/>
        <input type="submit" name="submit" value="HIT IT"/>
    </form>
<?php
if(isset($_POST['submit']) && $validation == 2)
{
    echo "Your favourite city is: " . $city . "<br />";
    echo "City population is: " . $population;
}
?>
</body>
</html>