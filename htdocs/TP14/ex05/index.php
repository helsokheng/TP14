<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- PHP Decision Making-->

    <?php
    // if else statement
    $date = date("m-d");

    if ($date == "05-24") {
        echo " Wishing you a very Happy Birthday";
    } else {
        // nothing
        echo "Prepare for my BD please!";
    }

    ?>
    <?php
    // elseif statment
    $date = date("m-d");

    if ($date == "09-19") {
        echo "<br> Happy birthday Mr. Bekkhem";
    } elseif ($date == "05-24") {
        echo "<br> Happy today u dit it!";
    } else {
        // 
        echo "This is nothing";
    }
    ?>
    <?php
    // switch statment
    $myFavcol = 'red';
    switch ($myFavcol) {
        case 'pink':
            echo "<br> My favorite color is Pink";
            break;
        case 'red':
            echo "<br> My favorite color is Red";
            break;
        case 'Yellow':
            echo "<br> My favorite color is Yellow";
            break;
        default:
        echo "<br> My favorite color not pink, red, or Yellow!";
    }

    ?>

</body>

</html>