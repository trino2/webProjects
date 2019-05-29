<?php
session_start();
include 'database.php';
/*
What is the highest mountain in South America?
Was was the name of the largest Confederate military prison during the Civil War?
Whats the tempature that water boils?
What is the last name of the first person to run a mile in under four minutes?
What is the name of the mountain range that separates Europe from Asia?

Answers: Aconcagua, Andersonville, 212F, Bannister, Ural */

if (!isset($_SESSION['userName'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Online Quiz</title>
  <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
  <link type="text/css" rel="stylesheet" href="StyleInc.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
 <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->

</head>

<body>
    <center><h2>Comprehensive Quiz</h2>
    <p>Click on pics to hide</p>
    
    What is the highest mountain in South America?
    <select name="mountain" id="mountain">
        <option value="Chose one">Chose one</option>
        <option value="Aconcagua">Aconcagua</option>
        <option value="Andes">Andes</option>
        <option value="Sierra Nevada">Sierra Nevada</option>
        <option value="Sierras de Cordoba">Sierras de Cordoba</option>
        <option value="Wilhelmina Mountains">Wilhelmina Mountains</option>
    </select><span id="feedback1"></span><br><br/>

   Was was the name of the largest Confederate military prison during the Civil War?
   <input type="text" name="ConfPrison" id="ConfPrison"><span id="feedback2"></span><br><br>
   
   Whats the tempature that water boils?
   <input type="checkbox" name="temperature" id="temperature" value="232">232
   <input type="checkbox" name="temperature" id="temperature" value="212">212
   <span id="feedback3"></span>
   <img id="TempPic" src="Temperatures.jpg"><br>
   <br><br>
   
   What is the last name of the first person to run a mile in under four minutes?
   <input type="radio" name="mile" id="mile" value="Armstrong">Armstrong
   <input type="radio" name="mile" id="mile" value="Bannister">Bannister
   <span id="feedback4"></span>
   <br><br>
   
    What is the name of the mountain range that separates Europe from Asia?
    <input type="text" name="MountBoard" id="MountBoard">
    <img id="MountPic" src="mountain.jpg"><br>
    <span id="feedback5"></span>
    <br><br>
    
    <button id="submit">Submit</button><br><br>
    <button id="redo">Redo</button>
    
                <h3 id="feedback"></h3>
            <h3 id="timeTaken"></h3>
            <h3 id= "Scores"></h3><br><br>
            <img class="ImgCl" src="csumb-logo-blue.png">
        </center>
        
      <script src="index.js"></script>
    </body>
</html>