<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>PHP Page</title>
</head>

<body>
<h1>This is Heading 1 content</h1>

<?php
$MyString1 = "Hello";
$MyString2 = "World";
$MyNum = 2112;
$NewVar = $MyString1 ."  ". $MyString2 . " ";
echo $NewVar;

echo strlen($NewVar);
echo strpos($NewVar, "Hello");

$myvar = " My first variable! ";
$_myvarnum = 2112;
 echo $myvar;
 echo $_myvarnum;
?>

<?php
$Val1 = 40;
$Val2 = 25;
$Val3 = 10;

$Cal = $Val1 + $Val2 + $Val3;
echo $Cal;

$Cal = $Val1 * $Val2 - $Val3;
echo $Cal;
?>

</body>
</html>