<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>On Line Cars</title>
        <link type="text/css" rel="stylesheet" href="TeamCss.css">
    </head>
    <body>
        <center><h2>Chose a Financiance Plan</h2>
            <table width="60%" cellpadding="3" cellspace="4">
            <tr>
                <td><strong>Finacial Rate</strong></td>
                <td><strong>Capital</strong></td>
                <td><strong>Months</strong></td>
                <td><strong>Order</strong></td>
            </tr>
        <?php
    $DealerRefnum = $_SESSION['dealer'];
    $servername = getenv('IP');
    $dbPort = 3306;
    // Which database (the name of the database in phpMyAdmin)?
    $database = "Parking Lot";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql2 = "SELECT * FROM Finance ORDER BY FinanceID";
            $stmt2 = $dbConn->prepare($sql2);
            $stmt2->execute ();
             while ($row = $stmt2->fetch()) {
                 if ($row['FinanceRef'] == $DealerRefnum){
                echo '<tr>';
                echo '<td>' .$row['FinanceRate']. '</td>';
                echo '<td>' .$row['FinanceCapital']. '</td>';
                echo '<td>' .$row['FinanceTime']. '</td>';
                echo "<td><form action=TeamCart.php>";
                echo "<input type='hidden' name='financeId' value='".$row['FinanceID'] . "'/>";
                echo "<input type='submit' value='Select'/></form> </td>";
                $_SESSION['FinanceID'] = $row['FinanceID'];
                echo '</tr>';
             }
            }
            ?>

        </center>
    </body>
</html>