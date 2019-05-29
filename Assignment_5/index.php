<?php
session_start();
$errorMessage = $_SESSION['message'];

?>
<!DOCTYPE html>
<html>
     <head>
    <title>Online Quiz</title>
    <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="StyleInc.css">
     </head>
    <body>
        <center><h3>Wellcome to the Online Quiz Page</h3>
        <h4>Please log in to update</h4>
        <p>Username: GoodStudent  Password: Quiz1</p>
        <p>Username: OtherStudent Password: QuizNoz</p>
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
            <img class="ImgCl" src="csumb-logo-blue.png">
        </center>
    </body>
</html>