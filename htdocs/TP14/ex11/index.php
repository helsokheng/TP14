<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: 5%;
            text-align: center;
        }
    </style>
</head>
<body>
     PHP simple forms
     <form action="registration.php" method="post">
        Name: <input type="text" name="name"> <br> <br>
        Number: <input type="number" name="number">  <br> <br>
        Email: <input type="email" name="email">  <br> <br>
        <input type="submit">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Employee Information Sample HTML Form</title>
 <style type="text/css" >
  .errorMsg{border:1px solid red; }
  .message{color: red; font-weight:bold; }
 </style>
</head>

<body>
  <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

<form name= "registration" id= "registration" method= "post" action= "registration.php">
<table width= "400" border= "0" align="center" cellpadding= "4" cellspacing= "1">
<tr>
<td>Employee Name:</td>
<td><input name= "emp_name" type= "text" id="emp_name" value="<?php if(isset($name)){echo $name;} ?>"
<?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> ></td>
</tr>
<tr>
<td>Contact No.: </td>
<td><input name= "emp_number" type= "text" id= "emp_number" value="<?php if(isset($number)){echo $number;} ?>"
<?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> ></td>
</tr>
<tr>
<td> Personal Email: </td>
<td><input name= "emp_email" type= "text" id= "emp_email" value="<?php if(isset($email)){echo $email; }?>"
<?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?> ></td>
</tr>
<tr>
<td></td>
<td><input type= "submit" name= "Submit" value= "Submit"></td>
</tr>
</table>
</form>

</body>
</html>