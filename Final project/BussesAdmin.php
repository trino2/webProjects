<?php 
session_start();

if (!isset($_SESSION['userName'])) {  //checks whether user has logged in
    header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Busses</title>
       <link type="text/css" rel="stylesheet" href="Styling.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </head>
    <body>
        <form method="POST" action="Runner.php">
<?php
    $servername = getenv('IP');
    $dbPort = 3306;
    $database = "Busses";
    $username = getenv('C9_USER');
    $password = "";
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM Buss ORDER BY TimeDay";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute ();
?>
        <center>
            <h1>Here are your all the Busses on the Road</h1>
            <table width="60%" cellpadding="3" cellspace="4">
            <tr>
                <td><strong>City</strong></td>
                <td><strong>Buss Number</strong></td>
                <td><strong>Time</strong></td>
                <td><strong>Delete</strong></td>
            </tr>
<?php
                while ($row = $stmt->fetch()) {
            echo '<tr>';
            echo '<td>' .$row['Location']. '</td>';
            echo '<td>' .$row['BusNum'].'</td>';
            echo '<td>' .$row['TimeDay']. '</td>';
            echo "<td><form action=deleteProduct.php>";
            echo "<input type='hidden' name='BussId' value='".$row['BussId']."'/>";
            echo "<input type='submit' value='Delete' name='deleteForm' /></form></td>";
            echo '</tr>';
                }

?>

    Input Time of the day: <input type="text" id="TimeDay" name="TimeDay" > <br><br>
    Input Location: <input type="text" id="Location" name="Location" > <br><br>
    Input Buss number: <input type="text" id="BusNum" name="BusNum" ><br><br>
    <input type="submit" name="submit" value= "Add"><br><br>
            </table><br /><br />
            <script src="BussesAdmin.js"></script>
            <a href="logout.php">Logout</a><br>

        </center>
    </body>
</html>