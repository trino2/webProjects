<?php include 'index.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
    </head>
    <body>
    <div class="container" border:"5px blue solid" background-color:"#6495ED" margin:"auto">
    Dear <?php echo $_POST["name"]; ?><br>
    Thank you for suporting <?php echo $_POST["candidate"]; ?><br>
    You have ordered a <?php echo $_POST["merch"]; ?><br>
    You also will get <?php echo $_POST["month"]; ?> subscription<br>
    Your total amount due <?php echo $_POST[$total]; ?><br>
    <a href="index.php">To Re-do Order Click HERE!</a>
    </div>
    </body>
</html>