<?php
session_start();
if (!isset($_SESSION['userName'])) { //checks whether user has logged in
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
     <head>
    <title>Picture Upload</title>
    <link type="text/css" rel="stylesheet" href="Styleing.css">
     </head>
    <body>
        <!-- <a href="downloadFile.php">view</a> 
        <center><img src='downloadFile.php?id=2' /> <br /> -->
        <center><img src='downloadFile.php' />
        <h4>Convited Fellon</h4><br />
        <h3>This is your curent picture, please update so we can email your neighbors</h3><br />

    <form method="POST" enctype="multipart/form-data">
    Select file: <input type="file" name="fileName" /><br><br>
    <input type="submit"  name="uploadForm" value="Upload File" /> <br /><br />
    </form>
    
     <form action="logout.php">
        <input type="submit" value="Logout" /> <br /><br />
     </form>
     
     <?php

if (isset($_FILES["fileName"])) {
    if ($_FILES["fileName"]["error"] > 0) {
        echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
    } else {
        include 'database.php';
        $dbConn = getDatabaseConnection();
        $binaryData = file_get_contents($_FILES["fileName"]["tmp_name"]);
        $sql = "UPDATE up_files SET fileName = :fileName, fileType = :fileType, fileData = :fileData";
        //$sql        = "INSERT INTO up_files (fileName, fileType, fileData ) " . "  VALUES (:fileName, :fileType, :fileData) ";
        $stm        = $dbConn->prepare($sql);
        $stm->execute(array(
            ":fileName" => $_FILES["fileName"]["name"],
            ":fileType" => $_FILES["fileName"]["type"],
            ":fileData" => $binaryData
        ));
    }
}

?>
        </center>
    </body>
</html>