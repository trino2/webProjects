<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Card Games!</title>
    <link type="text/css" rel="stylesheet" href="styles.css"/>
  </head>
    <body bgcolor="#7CFC00" background="images/cards.jpg">
        <center>
    <h1 class="font">This program will play blackjack!</h1>

<?php
echo "<div class='font'>";    
$Count = rand(1, 5);
$total = rand(1, 12);
$GoodStats = array();
$BadStats = array();
    echo "<h2>This game will be played $Count times!</h2>";
    
do
{
    $total = 0;
    while ($total <= 17){
    $Hit = rand(1, 12);
    echo "<p>You got $total </p>";
    echo "<p>Hit!</p>";
    $total = $Hit + $total;
}
if ($total <= 21){
    echo "<p>You got $total <br>Winner!</p>";
    array_push($GoodStats, "Win");
    $Count--;
}
else{
    echo "<p>You got $total <br>You Lost!</p>";
    array_push($BadStats, "Lost");
    $Count--;
    }
}while ($Count > 0);
    
    echo "<p>You got " .count($GoodStats).  "Wins</p>";
    echo "<p>You got " .count($BadStats). " Lost</p>";
echo "</div>";
?>

<img src="images/winner.jpg">

        </center>
    </body>
</html>