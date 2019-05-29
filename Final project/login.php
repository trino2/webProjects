<?php
    session_start(); 
    $errorMessage = $_SESSION['message'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="Styling.css">
    </head>
    <body>
        <div align="center">
            <header>
                  <h1>Busses - Admin Login</h1>
            </header>
            <?php
                if ($errorMessage) {
                    echo "<div>$errorMessage</div>";
                }
            ?>
            <div align="center">
                <h3>User Name: admin Password: secret</h3>
                <form method="post" action="loginProcess.php">
                    Username: <input type="text" name="username" /> <br><br>
                    Password: <input type="password" name="password" /><br><br />
                    <input type="submit" value="Login" name="loginForm" />
                </form>
            </div>
        </div>
    </body>
</html>