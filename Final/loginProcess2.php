<?php 
session_start(); //start or resume an existing session 
include 'database.php';
$connection = getDatabaseConnection(); 

//if (isset($_POST['loginForm'])) { //checks whether user submitted the form 
     
    $studentId = $_SESSION['studentId'];
            
    $sql = "SELECT *  
            FROM fe_lock
            WHERE studentId = :studentId"; 
             
    $namedParameters = array(); 
    $namedParameters[':studentId'] = $studentId;                 
     
    $statement = $connection->prepare($sql);  
    $statement->execute($namedParameters); 
    $record = $statement->fetch(PDO::FETCH_ASSOC); 
     
    if ($_SESSION['studentId'] == $record['studentId']) {
        $_SESSION['message'] = "<h3>This account is locked</h3>"; 
        header("Location: program1.php"); 
    }
    else { 
        unset($_SESSION['message']);
        $_SESSION['userName'] = $record['username']; 
        $_SESSION['daysLeftPwdChange'] = $record['daysLeftPwdChange'];
        
    $sql2 = "INSERT INTO fe_login (failedAttempts) VALUES(0)";
    $namedParameters2 = array(); 
    $namedParameters2[':studentId'] = $studentId;                 
     
    $statement2 = $connection->prepare($sql2);  
    $statement2->execute($namedParameters2); 
        header("Location: welcome.php");
    } 
//} 
?>