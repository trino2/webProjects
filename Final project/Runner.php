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
  $sql = "INSERT INTO Buss ( TimeDay, Location, BusNum)
    VALUES ( :TimeDay, :Location, :BusNum)";

    $namedParameters = array();
    $namedParameters[':TimeDay'] = $_POST['TimeDay'];
    $namedParameters[':Location'] = $_POST['Location'];
    $namedParameters[':BusNum'] = $_POST['BusNum'];

    $conn = getDatabaseConnection();
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    header("Location: BussesAdmin.php");
?>