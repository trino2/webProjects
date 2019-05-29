<?php include 'index.php'?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Otter Express</title>
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link type="text/css" rel="stylesheet" href="reviewphp/css/main.css">
    </head>
    <body bgcolor="#19334c">
<?php
    if($Max == "Max") {
    // desending order from the Strucure
    $sql = "SELECT * FROM `Product Search` ORDER BY Price DESC";
    }
        else {
            $sql = "SELECT * FROM `Product Search` ORDER BY Price";
        }
        
// Prepare the SQL...the DBMS uses this to figure out how best to execute the query
$stmt = $dbConn->prepare($sql);
// Execute the query
$stmt->execute ();

?>
        <center>
            <h1>Here are your Serch Results</h1>
            <table width="90%" cellpadding="5" cellspace="4">
            <tr>
                <td><strong>Product Name</strong></td>
                <td><strong>Product Category</strong></td>
                <td><strong>Product Healthy</strong></td>
                <td><strong>Product Price</strong></td>
            </tr>
<?php

            if($Healthy == "Healthy"){
                while ($row = $stmt->fetch()){
                if ($row['Healthy'] =='y'){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Category']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
                  }
            }
            elseif ($Name != null){
                while ($row = $stmt->fetch()) {
                   if($row['Name'] == $Name || $row['Category'] == $Name || $row['Price'] == $Name){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Category']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
                }
            }
            elseif ($Max != null){
                while ($row = $stmt->fetch()) {
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Category']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
            }
            else{
                while ($row = $stmt->fetch()) {
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Category']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
            }
?>
            </table>
            <img class="ImgCl" src="whiteblueotteer.jpg">
        </center>
    </body>
</html>