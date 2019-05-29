<?php session_start(); 
include 'TeamEffort.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>On Line Cars</title>
        <link type="text/css" rel="stylesheet" href="TeamCss.css">
    </head>
    <body>
<?php
$servername = getenv('IP');
$dbPort = 3306;
$database = "Parking Lot";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "SELECT * FROM Cars ORDER BY CarCost";
$stmt = $dbConn->prepare($sql);
$stmt->execute ();

$Name = $_POST["Name"];
$_SESSION["Name"] = $Name;
$CarColor = $_POST["CarColor"];
$_SESSION["CarColor"] = $CarColor;
?>
        <center>
            <h1>Here are your Serch Results</h1>
            <form method="POST" action="TeamDealer.php">
            <table width="60%" cellpadding="3" cellspace="6">
            <tr>
                <td><strong>Model</strong></td>
                <td><strong>Make</strong></td>
                <td><strong>Color</strong></td>
                <td><strong>Plates</strong></td>
                <td><strong>Cost</strong></td>
                <td><strong>Add to Cart</strong></td>
            </tr>
<?php
            if ($Name != null){
                while ($row = $stmt->fetch()) {
    if($row['CarPlate'] == $Name || $row['CarMake'] == $Name || $row['CarModel'] == $Name || $row['CarCost'] == $Name){
            echo '<tr>';
            echo "<td><a href='TeamDisplay.php?Item=".$row['CarModel']."'>".$row['CarModel']."</a></td>";
            echo '<td>' .$row['CarMake']. '</td>';
            echo '<td>' .$row['CarColor'].'</td>';
            echo '<td>' .$row['CarPlate']. '</td>';
            echo '<td>' .$row['CarCost']. '</td>';
            
            echo "<td><form action=TeamDealer.php>";
            echo "<input type='hidden' name='productId' value='".$row['CarID'] . "'/>";
            echo "<input type='radio' value='Order'/></form> </td>";
            $_SESSION['CarID'] = $row['CarID'];
            echo '</tr>';}
                }
            }
            elseif ($CarColor != null){
                while ($row = $stmt->fetch()) {
                    if ($row['CarColor'] == $CarColor){
            echo '<tr>';
            echo "<td><a href='TeamDisplay.php?Item=".$row['CarModel']."'>".$row['CarModel']."</a></td>";
            echo '<td>' .$row['CarMake']. '</td>';
            echo '<td>' .$row['CarColor'].'</td>';
            echo '<td>' .$row['CarPlate']. '</td>';
            echo '<td>' .$row['CarCost']. '</td>';
            
            echo "<td><form action=TeamDealer.php>";
            echo "<input type='hidden' name='productId' value='".$row['CarID'] . "'/>";
            echo "<input type='radio' value='Order'/></form> </td>";
            $_SESSION['CarID'] = $row['CarID'];
            echo '</tr>';}
            }
        }
?>
            </table><br /><br />
            <div class="Info">
            <?php 
            if(isset($_GET['Item'])){
                $DisplayInfo = "SELECT * FROM Cars WHERE CarModel= :carModel" ;
                $stmt2 = $dbConn->prepare($DisplayInfo);
                $stmt2->execute (array(":carModel"=>$_GET['Item']));
                while($row=$stmt2->fetch()){
                    echo "Model Name " . $row['CarModel'];
                    echo "Description " .$row['CarDescrip'];
                }
            }

            ?>    
            </div>
        Chose Car Dealer Rating:
      <input type="radio" name="dealer" <?php if (isset($Dealer) && $Dealer=="1") echo "checked";?>  value="1">1 Star
      <input type="radio" name="dealer" <?php if (isset($Dealer) && $Dealer=="2") echo "checked";?>  value="2">2 Stars
      <input type="radio" name="dealer" <?php if (isset($Dealer) && $Dealer=="3") echo "checked";?>  value="3">3 Stars <br />
        <input type="submit" name="submit" value="Dealer">
        </center>
    </body>
</html>