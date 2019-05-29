<?php

if (isset($_GET['addForm'])) {  //admin submitted form to add product
    
  include 'database.php';

  $sql = "INSERT INTO oe_product ( productName, productDescription, price, categoryId) 
          VALUES ( :productName, :productDescription, :price, :categoryId)";

  $namedParameters = array();
  $namedParameters[':productName'] = $_GET['productName'];
  $namedParameters[':productDescription'] = $_GET['productDescription'];
  $namedParameters[':price'] = $_GET['price'];
  $namedParameters[':categoryId'] = $_GET['categoryId'];

  $conn = getDatabaseConnection();    
  $statement = $conn->prepare($sql);
  $statement->execute($namedParameters);    
      
  echo '<center><h3>Record has been added!</h3></center>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
  <link type="text/css" rel="stylesheet" href="CoolStyle.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Add new Product</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div align="center">
      <h1>Adding New Product</h1>
    <div align="center">
      <form>
          Product Name: <input type="text" name="productName" /> <br /> <br />
          Description: <textarea rows="4" cols="20" name="productDescription"></textarea><br /> <br />
          Price: <input type="text" name="price" /> <br /> <br />
          Category: <select name="categoryId">
                       <option value="1">Soft Drinks</option>
                       <option value="2">Snacks </option>
                       <option value="3">Sandwiches </option>
                    </select>
          <br /> <br />   
          <input type="submit" value="Add Product" name="addForm" /><br /><br />
      </form>
    </div>
     <form action="products.php">
    <input type="submit" value="Menu" /><br /><br />
    <img class="ImgCl" src="csumb-logo-blue.png">
  </div>
</body>
</html>