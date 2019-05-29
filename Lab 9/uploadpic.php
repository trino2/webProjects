<?php

    include 'Lab9Display.php';
    
    if ($_FILES["fileName"]["error"] > 0) {
          echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
        }
        else {
          echo "Upload: " . $_FILES["fileName"]["name"] . "<br>";
          echo "Type: " . $_FILES["fileName"]["type"] . "<br>";
          echo "Size: " . ($_FILES["fileName"]["size"] / 1024) . " KB<br>";
          echo "Stored in: " . $_FILES["fileName"]["tmp_name"];
          include 'database.php';
          $dbConn = getDatabaseConnection();

          $binaryData = file_get_contents($_FILES["fileName"]["tmp_name"]);
          $sql = "INSERT INTO up_files (fileName, fileType, fileData ) " .
                    "  VALUES (:fileName, :fileType, :fileData) ";
          $stm=$dbConn->prepare($sql);
          $stm->execute(array (":fileName"=>$_FILES["fileName"]["name"],
                               ":fileType"=>$_FILES["fileName"]["type"],
                               ":fileData"=>$binaryData));
          echo "<br />File saved into database <br /><br />";                     
        }
        
        header("Location: Lab9Display.php");
?>