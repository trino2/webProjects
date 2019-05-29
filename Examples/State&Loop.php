<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Statements & Loops</title>
</head>

<body>
<center>
<h1>Testing the PHP</h1>

<h2>This is testing if & else statements</h2>
<?php
$testV = 20;
if ($testV == 20){
    echo "This is the correct value";
}
else{
    echo "This is not correct";
}
?>
<h2>This is testing switch statements</h2>
<?php
$days = "Saturday";
switch($days)
{
    case "Sunday":
        echo "Today is the fist day of the week";
        break;
    case "Monday":
        echo "Today is the fist work day";
        break;
    case "Tuesday":
        echo "Today is the 2nd work day";
        break;
    case "Wensday":
        echo "Today is the 3rd work day";
        break;
    case "Thurday":
        echo "Today is the 4th work day";
        break;
    case "Friday":
        echo "Today is the 5th work day";
        break;
    case "Saturday":
        echo "Today is the 6th work day";
        break;
    default:
        echo "This not a day!";
}
?>
<h1>Creating a do while loop</h1>
<?php
$i = 1;
do{
    echo "Current number is " .$i. "<br>";
    $i++;
    }
while ($i <= 25)
?>
<h1>Creating a for loop</h1>
<?php
for ($i = 0; $i < 25; $i++)
{
    echo "The number is curentrly " .$i. "<br>";
    
}
?>
<h1>Creating a Array</h1>
<?php
$ar = array("left", "right", "up", "down");
foreach($ar as $arVal)
{
    echo "My array values are " .$arVal. "<br>";
}
?>
</center>
</body>
</html>