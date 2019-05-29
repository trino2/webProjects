<?php 
session_start(); //start or resume an existing session 
include 'database.php';
$connection = getDatabaseConnection(); 

if (isset($_POST['loginForm'])) { //checks whether user submitted the form 
     
    $username = $_POST['username']; 
    $password = hash("sha1","gH_*" . $_POST["password"] . "_9\$xP");

    $sql = "SELECT *  
            FROM oe_admin 
            WHERE username = :username 
            AND password = :password";  //Preventing SQL Injection 
             
    $namedParameters = array(); 
    $namedParameters[':username'] = $username;                 
    $namedParameters[':password'] = $password;             
     
    $statement = $connection->prepare($sql);  
    $statement->execute($namedParameters); 
    $record = $statement->fetch(PDO::FETCH_ASSOC); 
     
    if (empty($record)) { //wrong username or password 
        $_SESSION['message'] = "<h3>Wrong username or password!</h3>"; 
        header("Location: login.php"); 
    }
    else { 
        unset($_SESSION['message']);
        $_SESSION['userName'] = $record['username']; 
        $_SESSION['adminName'] = $record['fullName']; 
         
        header("Location: BussesAdmin.php");
    } 
} 
?>