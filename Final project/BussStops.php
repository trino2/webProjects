<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>On Line Buss</title>
        <link type="text/css" rel="stylesheet" href="Styling.css">
    </head>
    <body>
        <center>
            <table>
<?php
     $CityRefnum = $_SESSION['CityId'];
     $StRefnum = $_POST['city'];
     $StName = $_POST['StName'];
         
    $servername = getenv('IP');
    $dbPort = 3306;
    $database = "Busses";
    $username = getenv('C9_USER');
    $password = "";
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql3 = "SELECT * FROM StreetStops ORDER BY StId";
    $stmt3 = $dbConn->prepare($sql3);
    $stmt3->execute();
    
    echo '<h3>Thank You for using the buss in the city of '. $_SESSION['StartLocation'] . ' we hope you enjoy the city of '. $_SESSION['CityName'] . ' ';
    echo '<h3>Here are the Buss Stops in that city</h3>';

             while($row = $stmt3->fetch()) {
                 if ($row['StId'] == $CityRefnum ){
                echo '<tr>';
                echo '<td>' .$row['Stop1']. '</td>';
                echo '<td>' .$row['Stop2']. '</td>';
                echo '<td>' .$row['Stop3']. '</td>';
                echo '<td>' .$row['Stop4']. '</td>';
                echo '<td>' .$row['Stop5']. '</td>';
                echo '<td>' .$row['Stop6']. '</td>';
                echo '<td>' .$row['Stop7']. '</td>';
                echo '<td>' .$row['Stop8']. '</td>';
                echo '<td>' .$row['Stop9']. '</td>';
                echo '<td>' .$row['Stop10']. '</td>';
                echo '<td>' .$row['Stop11']. '</td>';
                echo '<td>' .$row['Stop12']. '</td>';
                echo '</tr>';
             }
             }
             echo '</table>';
            
    $sql4 = "SELECT * FROM Buss ORDER BY BussId";
    $stmt4 = $dbConn->prepare($sql4);
    $stmt4->execute();
         while($row = $stmt4->fetch()) {
                 if ($row['BussNum'] < $_SESSION['BussId'] && $row['Location'] == $_SESSION['CityName']){
                     $ETA = $row['TimeDay'];
                 }
         }
    echo '<h3> The bus will be in '. $_SESSION['CityName'] .' at ' . $ETA .' Have a nice day ';
            ?>
        </center>
    </body>
</html>