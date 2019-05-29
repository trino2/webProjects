<?php
$Mug = 15;
$Caps = 20;
$Pins = 5;
$ToteBag = 10;
$Month1 = 10;
$Month3 = 30;
$Month6 = 60;
$Month12 = 120;

$total = " ";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contibute to Candidate</title>
        <link type="text/css" rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <form action="confirmation.php" method="post">
        <div class="container" border:"5px blue solid" background-color:"#6495ED" margin:"auto">
        <h2><center>Support your Presidential Candidate</h2>
            <center>
                <img class="ImgCl" src="images/campaign3.jpeg"></center><br>
                    Enter your name: <input type="text" name="name"><br>
                    Enter your age: <input type="text" name="age"><br>
                        <div class="formsubmition">Select your Candidate:
                            <select name="candidate" value="<?php echo $candidate;?>">
                            <option value="Burney Sanders">Burney Sanders</option>
                            <option value="Hilary Clinton">Hilary Clinton</option>
                            <option value="Donald Trump">Donald Trump</option>
                            <option value="Ben Carson">Ben Carson</option>
                            <option value="Ted Cruz">Ted Cruz</option>
                            </select>
                                <div class="merch">Merchandise<br>
                                <input type="checkbox" name="merch" value="Mug">Mugs<br>
                                <input type="checkbox" name="merch" value="Cap">Cap's<br>
                                <input type="checkbox" name="merch" value="Tote Bag">Tote bags<br>
                                <input type="checkbox" name="merch" value="Pin">Pin<br>
                                <?php $total += "merch";?>
                                    <div class="magsub" >Campaign Magazine ($10 per Month)<br>
                                    <span class="tab">
                                    <input type="radio" name="month" value="1 Month">1 Month
                                    <input type="radio" name="month" value "3 Months">3 Month
                                    <input type="radio" name="month" value "6 Months">6 Month
                                    <input type="radio" name="month" value = "12 Months">12 Month<br></span>
                                    <?php $total += "month";?>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>