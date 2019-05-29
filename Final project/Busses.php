<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Busses</title>
       <link type="text/css" rel="stylesheet" href="Styling.css">
    </head>
    <body>
<?php
$Name = $time = null;
$servername = getenv('IP');
$dbPort = 3306;
$database = "Busses";
$username = getenv('C9_USER');
$password = "";
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "SELECT * FROM Buss ORDER BY TimeDay";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
?>
    <center><h2>Wellcome to the On-Line Busses</h2>
    
    <form method="POST" action="BustopDisplay.php">
    Search Database for Time, City, or Bus: <input type="text" name="Name" value="<?php echo $Name;?>">
    
    <input type="radio" name="time" <?php if (isset($time) && $time == "AM") echo "checked";?> value="AM">Am
    <input type="radio" name="time" <?php if (isset($time) && $time == "PM") echo "checked";?> value="PM">Pm<br><br>
      
    <input type="submit" name="submit" value="Search"> <br><br>
    <a href="login.php">Login</a><br><br>
    <a href="https://docs.google.com/a/csumb.edu/document/d/1VvTY88z5aw4tJr4AK3XFaJ4EKXY4D9uNqoUPDJkmpMs/edit?usp=sharing">User Story</a><br>

            </form>
        </center>
    </body>
</html>