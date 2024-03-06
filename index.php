<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<input type="text" placeholder = "Search Product">
<button>search now </button>
<hr>
<?php
include('./config/database.php');
$sql = "SELECT  * FROM pet_clinic" ;
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { 
   // echo "<br>" . "Product ID: " . $row['product_id'] . "<br>";
    // echo  "Product Name: " . $row['product_name'] . "<br>";
     echo  "Pet Name:  " . $row['Pet_Name'] . "<br>";
 
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>

</html>



