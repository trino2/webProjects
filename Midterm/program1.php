<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <link type="text/css" rel="stylesheet" href="css/styles.css"/> -->
        <title>Card Game!</title>
    </head>
    <body>
    <form action="Display.php" method="POST">
<?php
$Rows = $Columns = null;
$RowsErr = $ColumnsErr = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["rows"])) {
     $RowsErr = "Row is required";

   } else {
     $Rows = test_input($_POST["rows"]);
   }
   
   if (empty($_POST["columns"])) {
     $ColumnsErr = "Columns is required";
   } else {
    $Columns = test_input($_POST["columns"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = is_int($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1><center>Kings vs Ace's</h1>
            Number of Rows: <input type="number" name="rows" value="<?php if(!empty($Rows)){echo $Rows;}?>">
            <span class="error">* <?php echo $RowsErr;?></span><br>
            Number of Columns: <input type="number" name="columns" value="<?php if(!empty($Columns)){echo $Columns;}?>">
             <span class="error2">* <?php echo $ColumnsErr;?></span><br>
            Suit to Omit: <select name="suit" value="<?php echo $Suits;?>">
                            <option value="hearts">Hearts</option>
                            <option value="clubs">Clubs</option>
                            <option value="diamonds">Diamonds</option>
                            <option value="spades">Spades</option>
                            </select>
            <input type="submit" name="submit" value="Submit">
            </center>
          </form>
    </body>
</html>