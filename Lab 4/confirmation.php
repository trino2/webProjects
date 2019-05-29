<?php
$Mug = 15;
$Caps = 20;
$Pins = 5;
$ToteBag = 10;
$Month1 = 10;
$Month3 = 30;
$Month6 = 60;
$Month12 = 120;
$total = 0;
    
    if ($_POST["merch"] == "mug"){
        $total = $total + $Mug;
    }if ($_POST["merch"] == "cap") {
        $total = $total + $Caps;
    }if ($_POST["merch"] == "tote bag") {
        $total = $total + $ToteBag;
    }if ($_POST["merch"] == "pin") {
        $total = $total + $Pins;
    }if ($_POST["month"] == "1 month") {
        $total = $total + $Month1;
    }if ($_POST["month"] == "3 months") {
        $total = $total + $Month3;
    }if ($_POST["month"] == "6 months") {
        $total = $total + $Month6;
    }if ($_POST["month"] == "12 months") {
        $total = $total + $Month12;
    }
    
 /* if(isset($_POST["merch"][$item])){
        if ($_POST["merch"] == "mug"){
        $total = $total + $Mug;
        }elseif ($_POST["merch"] == "cap") {
        $total = $total + $Caps;
        }elseif ($_POST["merch"] == "tote bag") {
        $total = $total + $ToteBag;
        }elseif ($_POST["merch"] == "pin") {
        $total = $total + $Pins;
        }
    }*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
        <link type="text/css" rel="stylesheet" href="css/styles.css">
    </head>
    <body bgcolor="#6495ED">
    <div class="container" margin:"auto" padding:"20px" padding-top: "20px">
    Dear <?php echo $_POST["name"]; ?><br>
    Thank you for suporting <?php echo $_POST["candidate"]; ?><br>
    You have ordered <?php echo $_POST['merch']; ?><br>
    You also will get <?php echo $_POST["month"]; ?> subscription<br>
    Your total amount due $<?php echo $total; ?><br>
    <a href="index.php">To Re-do Order Click HERE!</a>
    </div>
    </body>
</html>