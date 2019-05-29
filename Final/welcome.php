<?php
session_start();

if (!isset($_SESSION['username'])) {  //checks whether user has logged in
    header("Location: program1.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
  <link type="text/css" rel="stylesheet" href="CoolStyle.css">

  <title>welcome</title>
</head>

<body>
    <?php
   echo'<h2> Days left to change password ' . $_SESSION['daysLeftPwdChange'] . '</h2>';
   echo'<h2> Failed attemps ' . $_SESSION['failedAttempts'] . '</h2>';
   ?>
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
     <tr style="background-color:#FFC0C0">
      <td>1</td>
      <td>The welcome.php file is shown when the user enters the right credentials AND the account is NOT locked.</td>
      <td width="20" align="center">10</td>
    </tr>    
     <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>If the account is NOT locked, the "failedAttempts" field is reset to 0 when the user enters the right credentials.</td>
      <td width="20" align="center">10</td>
    </tr>      
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>The "failedAttempts" field is increased by 1 when entering the wrong password</td>
      <td width="20" align="center">10</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>A new record is inserted in the "fe_lock" table when the "failedAttempts" field has a value of 3.</td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>The message "This account is locked" is displayed when the account is locked and someone enters the right username/password</td>
      <td width="20" align="center">15</td>
    </tr> 
     <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>After typing the username, the number of days left to change the password is shown in red if the value of daysLeftPwdChange is between 1 and 15</td>
      <td width="20" align="center">10</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>After typing the username, the corresponding message is displayed in red if the value of daysLeftPwdChange is 0</td>
      <td width="20" align="center">10</td>
    </tr>      
    
     <tr style="background-color:#99E999">
      <td>5</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">&nbsp;</td>
    </tr> 
  </tbody></table>
</body>
</html>