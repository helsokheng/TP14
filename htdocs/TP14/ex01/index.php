<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>

    <?php
    // to do

    echo "Hello world, I'm a php script!<br>";
    define("Email", "me@example.com");
    
    define("myCon", true);
    if(myCon){
    // echo "here"; // evaluate to true
    }

    define("ONECONSTANT","some value");

    define("CONSTANT"," Hello world1");

    echo CONSTANT; // OUTPUT
    // echo Constant; // 

    define("GREETING","<br> Hello world2");
    echo GREETING;

    
    ?>
    
</body>
</html>