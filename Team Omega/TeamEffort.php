<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Online Dealearship</title>
       <link type="text/css" rel="stylesheet" href="TeamCss.css">
    </head>
    <body>
                
<?php $Name = $CarMake = $CarModel = $CarColor = $CarCost = $Dealer = null; 
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
?>

    <center><h2>Wellcome to the On-Line Automotive Store</h2>
    <form method="POST" action="TeamDisplay.php">
       
    Search Cars and Prices: <input type="text" name="Name" value="<?php echo $Name;?>">
    
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Blue") echo "checked";?> value="Blue">Blue
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Red") echo "checked";?> value="Red">Red
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Silver") echo "checked";?> value="Silver">Silver
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "White") echo "checked";?> value="White">White
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Yellow") echo "checked";?> value="Yellow">Yellow
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Brown") echo "checked";?> value="Brown">Brown
    <input type="radio" name="CarColor" <?php if (isset($CarColor) && $CarColor == "Green") echo "checked";?> value="Green">Green<br />
      
        <input type="submit" name="submit" value="Search">

                </form>
            </table>
        </center>
    </body>
</html>