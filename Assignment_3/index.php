<!DOCTYPE html>
<html>
<head>
    <title>Assingment 3</title>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
</head>
    <body>
        <form action="Confirm.php" method="POST">
<?php

$nameErr = $emailErr = $genderErr = $classErr = $unitsErr = null;
$name = $email = $gender = $comment = $class = $units = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["class"])) {
     $class = null;
   } else {
     $class = test_input($_POST["class"]);
     if (!preg_match("/\b(?:\/\/|CST\ )[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$class)) {
       $classErr = "Invalid Class, Classes start with CST"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = null;
   } else {
     $comment = test_input($_POST["comment"]);
   }
   
   if (empty($_POST["units"])) {
     $unitsErr = "units are required";
   } else {
     $units = test_input($_POST["units"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
    <h2>Assingment 3</h2>
    <h3>Survey of class comments</h3>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Please enter name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Type your e-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Class name: <input type="text" name="class" value="<?php echo $class;?>">
   <span class="error"><?php echo $classErr;?></span>
   <br><br>
   How many units are you taking: 
   <input type="checkbox" name="units" <?php if (isset($units) && $units=="less than 30") echo "checked";?>  value="less than 30">Less than 30 units
   <input type="checkbox" name="units" <?php if (isset($units) && $units=="30 or more") echo "checked";?>  value="30 or more">30 units or less than 60
   <input type="checkbox" name="units" <?php if (isset($units) && $units=="60 or more") echo "checked";?>  value="60 or more">60 units or more
   <span class="error">* <?php echo $unitsErr;?> </span>
   <br><br>
   Comments of class: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>