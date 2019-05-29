<?php
  session_start();
  include 'database.php';  
  $Mountain = $_POST['mountain'];
  $ConfQuie = $_POST['ConfPrison'];
  $Temperat = $_POST['temperature'];
  $MileRune = $_POST['mile'];
  $MountBoa = $_POST['MountBoard'];
  $Student = $_POST['userName'];
    
  
  $sql = "INSERT INTO QuizResults ( QuizPerson, QuizScore, Dates, Time, TotalScore)
    VALUES ( :QuizPerson, :QuizScore, :Dates, :Time, :TotalScore)";
    
    $namedParameters = array();
    $namedParameters[':QuizPerson'] = $_SESSION['userName'];
    $namedParameters[':QuizScore'] = $_POST['QuizScore'];
    $namedParameters[':Dates'] = $_POST['Dates'];
    $namedParameters[':Time'] = $_POST['Time'];
    $namedParameters[':TotalScore'] = $_POST['TotalScore'];
    
    $conn = getDatabaseConnection();
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);

?>