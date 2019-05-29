<?php 
session_start(); //start or resume an existing session 
include 'database.php';
$connection = getDatabaseConnection(); 

if (isset($_POST['loginForm'])) { //checks whether user submitted the form 
     
    $username = $_POST['username']; 
    $password = hash("sha1",$_POST["password"]);

    $sql = "SELECT *  
            FROM fe_login
            WHERE username = :username 
            AND password = :password";
             
    $namedParameters = array(); 
    $namedParameters[':username'] = $username;                 
    $namedParameters[':password'] = $password;             
     
    $statement = $connection->prepare($sql);  
    $statement->execute($namedParameters); 
    $record = $statement->fetch(PDO::FETCH_ASSOC);
     
    if (empty($record)) {
        $_SESSION['message'] = "<h3>Wrong username or password!</h3>"; 
        header("Location: login.php"); 
    }
    else { 
        unset($_SESSION['message']);
        $_SESSION['username'] = $record['username']; 
        $_SESSION['failedAttempts'] = $record['failedAttempts'];
        $_SESSION['daysLeftPwdChange'] = $record['daysLeftPwdChange'];
        $_SESSION['studentId'] = $record['studentId'];
        header("Location: loginProcess2.php");
    }
} 
?>