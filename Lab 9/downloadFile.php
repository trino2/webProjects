<?php

 include 'database.php';
 $dbConn = getDatabaseConnection();

 //$sql = "SELECT * FROM up_files WHERE fileId = :fileId";
 $sql = "SELECT * FROM up_files";
 $stmt = $dbConn->prepare($sql);
 $stmt->execute( array(":fileId"=> $_GET['id']));

 $stmt->bindColumn('fileData', $data, PDO::PARAM_LOB);
 $record = $stmt->fetch(PDO::FETCH_BOUND);
 
 if (!empty($record)){
    header('Content-Type:' . $record['fileType']);   //specifies the mime type
  //header('Content-Disposition: inline;');
    header('Content-Disposition: attachment;');
    echo $data; 
  }

?>