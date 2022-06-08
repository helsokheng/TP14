<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- PHP Loop-->
    <?php
    // while loop

    $i = 1;
    while ($i <= 3) {
        echo "Hello while $i times" . '<br>';
        $i++;
    }
    ?>

    <?php
    // Do while loop
    $i = 0;
    do {
        $i++;
        echo "PHP do .. while $i times" . '<br>';
    } while ($i <= 5);
    ?>

    <?php
    // Foreach loop
    $salary[] = 2500;
    $salary[] = 3000;
    $salary[] = 3500;

    foreach ($salary as $value) {
        # code...
        echo "Salary: $value <br>";
    }
    ?>
     <?php
    // For loop
   for($i=1; $i <=4; $i++){
       echo "PHP for loop print $i times"."<br>";
   }
    ?>
</body>

</html>