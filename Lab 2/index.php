<!DOCTYPE html>
<html>
     <head>
    <title>LED Show</title>
    <link type="text/css" rel="stylesheet" href="Styles.css">
     </head>
    <body bgcolor="#000000">
<?php
    function printRow($char, $gcolor){
        echo "<tr>";
        for($i = 0; $i <= 6; $i++){
            if($gcolor == "randcell"){
               if($char[$i] == 1){
               echo "<td style='background-color: " .generateColor(). "'>";
            }
                else{echo "<td style='background-color: #000000'>";}
            }
            elseif($gcolor == "static"){
                if($char[$i] == 1){
               echo "<td style='background-color: #FFFF00'>";
            }
                else{echo "<td style='background-color: #000000'>";}
            }
            else{ 
                if($char[$i] == 1){
                echo "<td style='background-color: " .$gcolor. "'>";
                 }
                    else{ echo "<td style='background-color: #000000'>";
                }
            }
        }
        echo "</td></tr>";
    }
    function printCharacter($char, $gcolor){
        if($gcolor == "randLeter"){$gcolor = generateColor();}
        echo "<table id= '#t1'>";
        
        switch ($char)
        {
            case "A":
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([0,0,0,1,0,0,0],$gcolor);
                printRow([0,0,1,0,1,0,0],$gcolor);
                printRow([0,1,0,0,0,1,0],$gcolor);
                printRow([1,1,1,1,1,1,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([0,0,0,0,0,0,0],$gcolor);
                break;
            case "B":
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([1,1,1,1,1,1,0],$gcolor);
                printRow([1,0,0,0,0,1,0],$gcolor);
                printRow([1,0,0,0,0,1,0],$gcolor);
                printRow([1,1,1,1,1,1,0],$gcolor);
                printRow([1,0,0,0,0,1,0],$gcolor);
                printRow([1,0,0,0,0,1,0],$gcolor);
                printRow([1,1,1,1,1,1,0],$gcolor);
                printRow([0,0,0,0,0,0,0],$gcolor);
                break;
            case "I":
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([1,1,1,1,1,1,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([1,1,1,1,1,1,0],$gcolor);
                break;
            case "S":
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([0,1,1,1,1,1,1],$gcolor);
                printRow([0,1,0,0,0,0,0],$gcolor);
                printRow([0,1,0,0,0,0,0],$gcolor);
                printRow([0,1,1,1,1,1,1],$gcolor);
                printRow([0,1,1,1,1,1,1],$gcolor);
                printRow([0,0,0,0,0,0,1],$gcolor);
                printRow([0,0,0,0,0,0,1],$gcolor);
                printRow([1,1,1,1,1,1,1],$gcolor);
                break;
            case "O":
                printRow([1,1,1,1,1,1,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,1,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,0,0,0,0,0,1],$gcolor);
                printRow([1,1,1,1,1,1,1],$gcolor);
                break;
            case "K":
                printRow([1,0,0,0,1,0,0],$gcolor);
                printRow([1,0,0,1,0,0,0],$gcolor);
                printRow([1,0,1,0,0,0,0],$gcolor);
                printRow([1,1,0,0,0,0,0],$gcolor);
                printRow([1,1,0,0,0,0,0],$gcolor);
                printRow([1,0,1,0,0,0,0],$gcolor);
                printRow([1,0,0,1,0,0,0],$gcolor);
                printRow([1,0,0,0,1,0,0],$gcolor);
                printRow([1,0,0,0,0,1,0],$gcolor);
                break;
            case "!":
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([0,0,0,0,0,0,0],$gcolor);
                printRow([0,0,1,1,0,0,0],$gcolor);
                break;
            
        }
        echo "</table>";
    }

    function generateColor(){
       return "rgb(" .rand(0, 255). ", ".rand(0, 255). "," .rand(0, 255). ")";
    }

?>
        <center>
        <div class="leftDIV"><?php printCharacter('A', "randcell"); ?></div>
        <div class="middleDIV"><?php echo printCharacter('B', "randcell"); ?></div>
        <div class="rightDIV"><?php echo printCharacter('A',"randcell"); ?></div>
        <br/>
        <div class="leftDIV"><?php echo printCharacter('I', "randLeter"); ?></div>
        <div class="rightDIV"><?php echo printCharacter('S', "randLeter"); ?></div>
        <br/>
        <div class="leftDIV"><?php echo printCharacter('O', "static"); ?></div>
        <div class="middleDIV"><?php echo printCharacter('K', "static"); ?></div>
        <div class="rightDIV"><?php echo printCharacter("!", "static"); ?></div>
        </center>
    </body>
</html>