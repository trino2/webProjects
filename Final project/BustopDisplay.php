<?php session_start(); 
include 'Busses.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Busses</title>
       <link type="text/css" rel="stylesheet" href="Styling.css">
    </head>
    <body>
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
    
    $Name = $_POST['Name'];
    $_SESSION['Name'] = $_POST['Name'];
    $Time = $_POST['time'];
    $_SESSION['time'] = $_POST['time'];;
?>
        <center>
            <h1>Here are your Serch Results</h1>
            <form method="POST" action="BussWhere.php">
            <table width="60%" cellpadding="3" cellspace="5">
            <tr>
                <td><strong>City</strong></td>
                <td><strong>Buss Number</strong></td>
                <td><strong>Time</strong></td>
                <td><strong>Select</strong></td>
            </tr>
<?php
            if($Name != null){
                while ($row = $stmt->fetch()) {
    if($row['TimeDay'] == $Name || $row['Location'] == $Name || $row['BusNum'] == $Name){
            echo '<tr>';
            echo '<td>' .$row['Location']. '</td>';
            echo '<td>' .$row['BusNum'].'</td>';
            echo '<td>' .$row['TimeDay']. '</td>';
            
            echo "<td><form action=BussWhere.php>";
            echo "<input type='hidden' name='productId' value='".$row['BussId'] . "'/>";
            echo "<input type='radio' value='Select'/></form> </td>";
            $_SESSION['BussId'] = $row['BussId'];
            $_SESSION['StartLocation'] = $row['Location'];
            echo '</tr>';}
                }
            }
            elseif ($Time == "AM"){
                while ($row = $stmt->fetch()) {
                    if ($row['TimeDay'] < "12:00:00"){
            echo '<tr>';
            echo '<td>' .$row['Location']. '</td>';
            echo '<td>' .$row['BusNum'].'</td>';
            echo '<td>' .$row['TimeDay']. '</td>';
            
            echo "<td><form action=BussWhere.php>";
            echo "<input type='hidden' name='productId' value='".$row['BussId'] . "'/>";
            echo "<input type='radio' value='Select'/></form> </td>";
            $_SESSION['BussId'] = $row['BussId'];
            $_SESSION['StartLocation'] = $row['Location'];
            echo '</tr>';}
            }
        }
            elseif ($Time == "PM"){
                while ($row = $stmt->fetch()) {
                    if ($row['TimeDay'] >= 1200){
            echo '<tr>';
            echo '<td>' .$row['Location']. '</td>';
            echo '<td>' .$row['BusNum'].'</td>';
            echo '<td>' .$row['TimeDay']. '</td>';
            
            echo "<td><form action=BussWhere.php>";
            echo "<input type='hidden' name='productId' value='".$row['BussId'] . "'/>";
            echo "<input type='radio' value='Select'/></form> </td>";
            $_SESSION['BussId'] = $row['BussId'];
            $_SESSION['StartLocation'] = $row['Location'];
            echo '</tr>';}
            }
        }
?>
            </table><br /><br />

        Chose the city to visit:
      <input type="radio" name="city" <?php if (isset($City) && $City=="1") echo "checked";?>  value="1">King City
      <input type="radio" name="city" <?php if (isset($City) && $City=="2") echo "checked";?>  value="2">Greenfiled
      <input type="radio" name="city" <?php if (isset($City) && $City=="3") echo "checked";?>  value="3">Soledad
      <input type="radio" name="city" <?php if (isset($City) && $City=="4") echo "checked";?>  value="4">Chular
      <input type="radio" name="city" <?php if (isset($City) && $City=="5") echo "checked";?>  value="5">Gonzales
      <input type="radio" name="city" <?php if (isset($City) && $City=="6") echo "checked";?>  value="6">Salinas
      <input type="radio" name="city" <?php if (isset($City) && $City=="7") echo "checked";?>  value="7">Monterey<br><br>

      <input type="submit" name="submit" value="Let's Go!">
        </center>
    </body>
</html>