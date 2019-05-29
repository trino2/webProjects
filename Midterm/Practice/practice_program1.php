<!DOCTYPE html>
<html>
    <head>
        <title>Letter Game!</title>
    </head>
    <body>
        <center>
        <h2>The Letter Game</h2>
        <h3>Pick & then Find the Letter on grid</h3>
        <form action="board.php" method="post">
        <div class="formsubmition">Select Letter:
            <select name="letter" value="<?php echo $Letter;?>">
                
        for ($i = 65; $i <= 90; $i++){
            <option value="chr($i)">A</option>
}

                </center>
            </select>
        </form>
    </body>
</html>