<?php session_start();
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
    
     $DealerRefnum = $_POST['dealer'];
     $_SESSION['dealer'] = $DealerRefnum;
     
     $One = $Two = $Tree = 0;
    $sql = "SELECT * FROM Finance ORDER BY FinanceRef";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute ();
    while ($row = $stmt->fetch()) {
        if($row['FinanceRef'] == 1){
            $One++;
        }
        elseif($row['FinanceRef'] == 2){
            $Two++;
        }
        else{
        $Tree++;
        }
    }
         
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>On Line Cars</title>
        <link type="text/css" rel="stylesheet" href="TeamCss.css">
    </head>
    <body>
        <center><h2>What dealer would you like to use?</h2>
        <!-- <form method="POST" action="TeamDisplay.php"> -->
            <table width="60%" cellpadding="3" cellspace="4">
            <tr>
                <td><strong>Dealer Name</strong></td>
                <td><strong>Customers Review</strong></td>
                <td><strong>Financial Inst</strong></td>
                <td><strong>Add to Cart</strong></td>
            </tr>
        <?php
            $sql2 = "SELECT * FROM Dealer ORDER BY DealerReview";
            $stmt2 = $dbConn->prepare($sql2);
            $stmt2->execute ();
             while ($row = $stmt2->fetch()) {
                 if ($row['DealerFinanceing'] == $DealerRefnum){
                echo '<tr>';
                echo '<td>' .$row['DealerName']. '</td>';
                echo '<td>' .$row['DealerReview']. '</td>';
                if($row['DealerFinanceing']==1){
                echo '<td>' .$One. '</td>';}
                elseif($row['DealerFinanceing']==2){
                echo '<td>' .$Two. '</td>';}
                else{
                    echo '<td>' .$Tree. '</td>';
                }
                echo "<td><form action=TeamFinance.php>";
                echo "<input type='hidden' name='financeId' value='".$row['DealerID'] . "'/>";
                echo "<input type='submit' value='Select'/></form> </td>";
                $_SESSION['DealerID'] = $row['DealerID'];
                echo '</tr>';
             }
            }
            ?>
                </center>
            </table>
        </center>
    </body>
</html>