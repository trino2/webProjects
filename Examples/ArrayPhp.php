<!DOCTYPE html>
 <html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
            <center>
        <h1>This are Arrays in PHP</h1>
        <h2>Creating a for each loop in php</h2>
<?php
echo "This is a index array!<br>";
$songs = array("2112", "Trees", "Soyer", "ABA", "Give me shelter", "One way to rock", "XYZ");
echo "The song is: " .$songs[0];
echo "<br>The array count is: " .count($songs);

echo "<br>This is how you loop trew a index array!<br>";
$ArLeng = count($songs);
for($i=0; $i<=$ArLeng; $i++){
    echo $songs[$i] . "<br>";
}


echo "<br><br>This is a assosiative array";
$song = array("YYZ" => "Moving Pictures", "SubDiv" => "Signals", "Tears" => "2112");
echo "The CD is: " .$song["SubDiv"];
echo "<br>This is how you loop trew a assosiative array!<br>";
foreach($song as $k => $kValue){
    echo "The key is " .$k. " the value is " .$kValue. "<br>";
}


echo "This is how you sort a array!";
sort($songs);
ksort($song);


echo "<br>This is how you make a multidimentinal array!<br>";
$music = array
    (
        array("The Trees", "The Who", "The birds"),
        array("Moving Picture", "Slayer", "KISS"),
        array("Signals", "The Who", "Stycks")
        );
echo $music[0][0] . " " . $music[0][2];
echo "<br>" .$music[2][1];
?>

<?php
    $firstEmployee = ["name" => "Jason", "department" => null];
    $iTdepartment = ["name" => "IT", "employees" => [$firstEmployee]];
    $firstEmployee ["department"] = $ITdepartment; 
    $department = ["name" => "Admin" ];
        var_dump($firstEmployee);
?>
        
        
        </center>        
    </body>
 </html>