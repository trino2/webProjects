<?php
session_start();

if (!isset($_SESSION['userName'])) {  //checks whether user has logged in
    header("Location: login.php");
    }

function displayAllProducts(){
    include 'database.php';
    $conn = getDatabaseConnection();

    $sql = "SELECT productId, categoryId, productName, productDescription FROM oe_product ORDER BY productName";
    $records = getDataBySQL($conn, $sql);

    /* //Using HTML Links
    foreach ($records as $record) {
        echo $record['productName']; 
        echo " <a href='updateProduct.php?productId=".$record['productId']."'> Update </a> ";
        echo " <a href='deleteProduct.php'> Delete </a>";
        echo "<br />";
    }
    */
     //Using Form Buttons
         echo "<table>";
         echo '<tr>';
                echo '<th>Product Name</th>';
                echo '<th>Product Description</th>';
                echo '<th>Update Button</th>';
                echo '<th>Delete Button</th>';
            echo '</tr>';
        foreach ($records as $record) {
          echo "<tr>"; 
          echo "<td>" . $record['productName'] . "</td>";
          echo "<td>" . $record['productDescription'] . "</td>";
          
          echo "<td><form action=updateProduct.php>";
          echo "<input type='hidden' name='productId' value='".$record['productId'] . "'/>";
          echo "<input type='submit' value='Update'/></form> </td>";
          
          echo "<td><form action=deleteProduct.php>";
          echo "<input type='hidden' name='productId' value='".$record['productId']."'/>";
          echo "<input type='submit' value='Delete' name='deleteForm' /></form></td>";
          echo "</tr>";
        } //endForeach
        echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
  <link type="text/css" rel="stylesheet" href="CoolStyle.css">

  <title>Products</title>
</head>

<body>
  <div align="center">
      <h1>Product Administration</h1>

    <div align="center">
     <h3> Welcome <?php echo $_SESSION['userName']; ?>! </h3>
        
     <form action="logout.php">
        <input type="submit" value="Logout" /> <br /> <br />
     </form>
         
     <form action="addProduct.php">
        <input type="submit" value="Add New Product" /> <br />
     </form>
         
      <br /><br />
      <?php displayAllProducts()?>
      <br><br />
    </div>
    <img class="ImgCl" src="csumb-logo-blue.png">
  </div>
</body>
</html>