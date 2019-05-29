<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Otter Express</title>
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link type="text/css" rel="stylesheet" href="CoolStyle.css">
    </head>
    <body>
       <a href="#bottom" id= "top"><font color="00008B">Click Here for Bottom of Page</a>
       <center><h1>Wellcome to MySQL SELECT STATEMENT</h1>
<?php
function display1(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM Inventory ORDER BY Price";
$stmt = $dbConn->prepare($sql);
$stmt->execute ();
            echo "<br>";
             echo '<h2>SELECT * FROM Inventory ORDER BY Price</h2>';
             echo '<table width="50%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';}
            function display2(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql2 = "SELECT * FROM Inventory ORDER BY Name";
$stmt2 = $dbConn->prepare($sql2);
$stmt2->execute ();
            echo '<h3>These table displays the data in order of Names</h3><br>';
            echo '<h2>SELECT * FROM Inventory ORDER BY Name</h2>';
             echo '<table width="60%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt2->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';
            echo '<h3>These table displays the data in order of the Name colum in alphabetical order</h3>';}
            function display3(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql3 = "SELECT * FROM Inventory ORDER BY Calories";
$stmt3 = $dbConn->prepare($sql3);
$stmt3->execute ();
            echo '<h2>SELECT * FROM Inventory ORDER BY Calories</h2>';
             echo '<table width="60%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
                echo '</tr>';
               while ($row = $stmt3->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
            echo '</table>';
            echo '<h3>Data in order of calories in numerical order from phpmyadmin</h3><br>';}
            function display4(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql4 = "SELECT * FROM Inventory ORDER BY Healthy";
$stmt4 = $dbConn->prepare($sql4);
$stmt4->execute ();
            echo '<h2>SELECT * FROM Inventory ORDER BY Healthy</h2>';
             echo '<table width="70%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt4->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';
            echo '<h3>These table displays the data in order of Not Healthy and then Healthy It does this 
            due to the fact that N comes before Y in the alphabet.</h3><br>';}
            function display5(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql5 = "SELECT * FROM Inventory ORDER BY Type";
$stmt5 = $dbConn->prepare($sql5);
$stmt5->execute ();
             echo '<h2>SELECT * FROM Inventory ORDER BY Type</h2>';
             echo '<table width="60%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt5->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';
            echo '<h3>Its set up by the type of item in the table in Alpabetical order</h3><br>';}
            function display6(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql6 = "SELECT * FROM Inventory ORDER BY Name DESC";
$stmt6 = $dbConn->prepare($sql6);
$stmt6->execute ();
             echo '<h2>SELECT * FROM Inventory ORDER BY Name DESC</h2>';
             echo '<table width="80%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt6->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';
            echo '<h3>These table displays the data in order of Name in desending order</h3><br>';}
            function display7(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql7 = "SELECT * FROM Inventory ORDER BY Calories DESC";
$stmt7 = $dbConn->prepare($sql7);
$stmt7->execute ();
             echo '<h2>SELECT * FROM Inventory ORDER BY Calories DESC</h2>';
             echo '<table width="80%" cellpadding="3" cellspace="5">';
             echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Category</th>';
                echo '<th>Product Healthy</th>';
                echo '<th>Product Calories</th>';
                echo '<th>Product Price</th>';
            echo '</tr>';
               while ($row = $stmt7->fetch()){
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Type']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Calories']. '</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';}
               echo '</table>';
            echo '<h3>The data in order of the highest calories so one could see the worst choice if 
            you were on a diet</h3><br>';}
            function display8(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql8 = "SELECT COUNT(*) FROM Inventory";
$stmt8 = $dbConn->prepare($sql8);
$stmt8->execute ();
             echo '<h2>SELECT COUNT(Name) FROM Inventory</h2>';
            echo '<table width="18%" cellpadding="3" cellspace="2">';
            echo '<tr>';
                echo '<th>Products</th>';
            echo '</tr>';
            echo '<tr>';
            $totalRows = $dbConn->query('SELECT count(Type) FROM Inventory')->fetchColumn(); 
            echo '<td>' .$totalRows. '</td>';
            echo '</tr>';
            echo '</table>';
            echo '<h3>The number of tems in the table, so how many stuff in store</h3>';}
            function display9(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql9 = "SELECT AVG(Price) FROM Inventory";
$stmt9 = $dbConn->prepare($sql9);
$stmt9->execute ();
            echo '<h2>SELECT AVG(Price) FROM Inventory</h2>';
            echo '<table width="23%" cellpadding="3" cellspace="2">';
            echo '<tr>';
                echo '<th>Average Price</th>';
            echo '</tr>';
            echo '<tr>';
            $totalRows = $dbConn->query('SELECT AVG(Price) FROM Inventory')->fetchColumn(); 
            echo '<td>' .$totalRows. '</td>';
            echo '</tr>';
            echo '</table>';
            echo '<h3>The prices are added then divided by 19</h3><br>';}
            function display10(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "Otter Express Order";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql10 = "SELECT SUM(Calories) FROM Inventory";
$stmt10 = $dbConn->prepare($sql10);
$stmt10->execute ();
            echo '<h2>SELECT SUM(Calories) FROM Inventory</h2>';
            echo '<table width="19%" cellpadding="3" cellspace="2">';
            echo '<tr>';
                echo '<th>Total Calories</th>';
            echo '</tr>';
            echo '<tr>';
            $totalRows = $dbConn->query('SELECT SUM(Calories) FROM Inventory')->fetchColumn(); 
            echo '<td>' .$totalRows. '</td>';
            echo '</tr>';
            echo '</table>';
            echo '<h3>These table displays the amount of calories you would eat if you have 1 of each</h3><br>';}
            display8();
            display1();
            display2();
            display3();
            display4();
            display5();
            display6();
            display7();
            display9();
            display10();?>
            <img class="ImgCl" src="csumb-logo-blue.png">
         </center>
         <a href="#top" id="bottom">Go to Top of Page</a>
   </body>
</html>