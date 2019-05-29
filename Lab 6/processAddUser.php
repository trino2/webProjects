<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <div>
            <?php
            $saltedAndHashedPassword = hash("sha1","gH_*" . $_POST["password"] . "_9\$xP");
            echo $saltedAndHashedPassword;
            //$saltedAndHashedPassword = hash("sha1", $_POST["password"]);
            //echo $saltedAndHashedPassword;
            ?>
        </div>
    </body>
</html>