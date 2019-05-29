<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Otter Express</title>
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link type="text/css" rel="stylesheet" href="main.css">

    </head>
    <body bgcolor="#19334c">
        <form action="lab5Ans.php" method="POST">
<?php

$Healthy = $Name = $Max = null;
$servername = getenv('IP');
$dbPort = 3306;

// Which database (the name of the database in phpMyAdmin)?
$database = "Otter Express";

// My user information...I could have prompted for password, as well, or stored in the
// environment, or, or, or (all in the name of better security)
$username = getenv('C9_USER');
$password = "";

// Establish the connection and then alter how we are tracking errors (look those keywords up)
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

// Structure the select
$sql = "SELECT * FROM `Product Search` ORDER BY Price";

// Prepare the SQL...the DBMS uses this to figure out how best to execute the query
$stmt = $dbConn->prepare($sql);

// Execute the query
$stmt->execute ();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
/*   if (empty($_POST["Name"])) {
     $NameErr = "Name is required";
   } else {*/
     $Name = test_input($_POST["Name"]);/*
     if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
       $NameErr = "Only letters allowed"; 
     }*/
   }

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $Healthy = test_input($_POST["Healthy"]);
   }
   else{
       $Healthy = "";
   }

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $Max = test_input($_POST["Max"]);
   }
   else {
        $Max = null;
   }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
    <center><h2>Wellcome to the Otter Express Store</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Search Products: <input type="text" name="Name" value="<?php echo $Name;?>">
    <input type="submit" name="submit" value="Serch">
    <input type="checkbox" name="Healthy" <?php if (isset($Healthy) && $Healthy == "Healthy") echo "checked";?> value="Healthy">Healthy
    <input type="checkbox" name="Max" <?php if (isset($Max) && $Max == "Max") echo "checked";?> value="Max">Max Price
    
    </form>
            <table width="90%" cellpadding="5" cellspace="4">
            <tr>
                <td><strong>Product Name</strong></td>
                <td><strong>Product Category</strong></td>
                <td><strong>Product Healthy</strong></td>
                <td><strong>Product Price</strong></td>
            </tr>
            <?php while ($row = $stmt->fetch()) {
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Category']. '</td>';
            echo '<td>' .$row['Healthy'].'</td>';
            echo '<td>' .$row['Price']. '</td>';
            echo '</tr>';} ?>
            </table>
        </center>
    </body>
</html>