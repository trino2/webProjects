<?php
 
  include 'database.php';
  $conn = getDatabaseConnection();
  $sql = "DELETE FROM oe_product WHERE productId = :productId";
  $namedParameters = array();
  $namedParameters[':productId'] = $_GET['productId'];
  $statement = $conn->prepare($sql);    
  $statement->execute($namedParameters);

  header('Location: products.php');
  
?>