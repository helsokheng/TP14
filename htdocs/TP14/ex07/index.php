<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP array-->
    <?php 
    // numeric Array
    $age = array("Perter"=>"35","Ben"=>"37","Joe"=>"43");
    foreach ($age as $x => $val) {
        # code...
        echo "$x = $val <br>";
    }
    ?>
     <?php 
    // Muti-dimensional
    $multiDArray = array(
        "A" => array(0 => "red", 2 => "blue", 3 => "green"),
        "B" => array(0 => "red", 2 => "blue"),
        "C" => array(0 => "white", 4 => "purple", 8 => "grey"),
    );
    echo $multiDArray["A"][3]; // ouput green 
    echo "<br>";
    echo $multiDArray["C"][8]; // grey
    ?>

</body>
</html>