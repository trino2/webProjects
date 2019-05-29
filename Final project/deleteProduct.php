<?php
session_start();
function getDatabaseConnection() {
    $servername = getenv('IP');
    $dbPort = 3306;
    $database = "Busses";
    $username = getenv('C9_USER');
    $password = "";
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    return $dbConn;
}

function getDataBySQL($dbConn, $sql) {
    $stmt = $dbConn->prepare($sql);
    $stmt->execute ();
    return $stmt;    
}
  $sql = "DELETE FROM Buss WHERE BussId = :BussId";
  $namedParameters = array();
  $namedParameters[':BussId'] = $_GET['BussId'];
  $conn = getDatabaseConnection();
  $statement = $conn->prepare($sql);
  $statement->execute($namedParameters);
  header("Location: BussesAdmin.php");
  
?>