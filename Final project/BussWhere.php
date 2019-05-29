<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>On Line Buss</title>
        <link type="text/css" rel="stylesheet" href="Styling.css">
    </head>
    <body>
        <center><h2>Here is you're destination</h2>
            <table width="60%" cellpadding="3" cellspace="4">
            <tr>
                <td>City</td>
                <td>Major Business</td>
                <td>Popular School</td>
                <td>Number of stops</td>
            </tr>
        <?php
     $CityRefnum = $_POST['city'];
     $_SESSION['city'] = $_POST['city'];
     $StRefnum = $_POST['city'];

        $servername = getenv('IP');
        $dbPort = 3306;
        $database = "Busses";
        $username = getenv('C9_USER');
        $password = "";
        $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql2 = "SELECT * FROM City ORDER BY CityName";
        $stmt2 = $dbConn->prepare($sql2);
        $stmt2->execute();
            
             while ($row = $stmt2->fetch()) {
                 if ($row['CityId'] == $CityRefnum){
                echo '<tr>';
                echo '<td>' .$row['CityName']. '</td>';
                echo '<td>' .$row['Business']. '</td>';
                echo '<td>' .$row['Schools']. '</td>';
                echo '<td>' .$row['Stops']. '</td>';
                echo '</tr>';
               $_SESSION['CityId'] = $row['CityId'];
               $_SESSION['CityName'] = $row['CityName'];
             }
            }
            ?>
            </table> <br><br>

    <form method="POST" action="BussStops.php">

    <input type="submit" name="submit" value=" OK ">

                    </form>
                </center>
        </center>
    </body>
</html>