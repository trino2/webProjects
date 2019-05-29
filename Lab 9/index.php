<?php
session_start();
$errorMessage = $_SESSION['message'];

?>
<!DOCTYPE html>
<html>
     <head>
    <title>Picture Upload</title>
    <link type="text/css" rel="stylesheet" href="Styleing.css">
     </head>
    <body>
        <center><h3>Wellcome to the criminal Profile Page</h3>
        <h4>Please log in to update your ciminal profile</h4>
        <p>Inmate 45DE5612 use Username: IdidIt Password: Notsorry</p>
        <?php
            if ($errorMessage) {
                echo "<div>$errorMessage</div>";
                }
        ?>
            <div align="center">
                <form method="post" action="loginProcess.php">
                    Username: <input type="text" name="username" /> <br><br>
                    Password: <input type="password" name="password" /><br><br />
                    <input type="submit" value="Login" name="loginForm" />
                </form>
            </div>
        </center>
    </body>
</html>