<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shopping Cart</title>
       <link type="text/css" rel="stylesheet" href="TeamCss.css">
    </head>
    <body>
        <center><h2>Here is your Shopping Cart</h2>
        <table width="60%" cellpadding="3" cellspace="5">
            <tr>
                <td><strong>Make</strong></td>
                <td><strong>Model</strong></td>
                <td><strong>Color</strong></td>
                <td><strong>Plates</strong></td>
                <td><strong>Cost</strong></td>
            </tr>
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
$sql2 = "SELECT * FROM Dealer ORDER BY DealerReview";
$stmt2 = $dbConn->prepare($sql2);
$stmt2->execute ();
$sql3 = "SELECT * FROM Finance ORDER BY FinanceID";
$stmt3 = $dbConn->prepare($sql3);
$stmt3->execute ();

            while ($row = $stmt->fetch()) {
                    if ($row['CarID'] == $_SESSION['CarID']){
            echo '<tr>';
            echo '<td>' .$row['CarMake']. '</td>';
            echo '<td>' .$row['CarModel']. '</td>';
            echo '<td>' .$row['CarColor'].'</td>';
            echo '<td>' .$row['CarPlate']. '</td>';
            echo '<td>' .$row['CarCost']. '</td>';
            $Carcost = $row['CarCost'];
            echo '</tr>';}
            } ?>
        </table> <br />
        <table width="60%" cellpadding="3" cellspace="5">
            <tr>
                <td><strong>Dealer Name</strong></td>
                <td><strong>Customers Review</strong></td>
                <td><strong>Financial Inst</strong></td>
            </tr>
<?php

            while ($row2 = $stmt2->fetch()) {
                    if ($row2['DealerID'] == $_SESSION['DealerID']){
            echo '<tr>';
            echo '<td>' .$row2['DealerName']. '</td>';
            echo '<td>' .$row2['DealerReview']. '</td>';
            echo '<td>' .$row2['DealerFinanceing'].'</td>';
            echo '</tr>';}
            } ?> </table> <br />
            
            <table width="60%" cellpadding="3" cellspace="4">
            <tr>
                <td><strong>Finacial Rate</strong></td>
                <td><strong>Capital</strong></td>
                <td><strong>Months</strong></td>
            </tr>
<?php
            while ($row = $stmt3->fetch()) {
                    if ($row['FinanceID'] == $_SESSION['FinanceID']){
            echo '<tr>';
            echo '<td>' .$row['FinanceRate']. '</td>';
            $Rate = $row['FinanceRate'];
            echo '<td>' .$row['FinanceCapital']. '</td>';
            $Capital = $row['FinanceCapital'];
            echo '<td>' .$row['FinanceTime']. '</td>';
            $time = $row['FinanceTime'];
            echo '</tr>';}
            }
?>
            </tabel>
<?php
        echo "The cost cost " .$Carcost. " minus the capital of " . $Capital . " Interest of " .$Rate. " for the lenght of " .$time. " your total ";
        $Amount = $Carcost - $Capital;
        $Rate2 = $Rate / 100;
        $Amount2 = $Amount * $Rate2;
        $Amount3 = $Amount2 / $time;
        echo $Amount3;
        echo " Per Month ";
        echo "In total is " .$Amount2. "! ";
?>       
        </center>
    </body>
</html>