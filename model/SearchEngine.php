<?php

include('../config/database.php');
$value = $_POST['search'];
    $sql = "SELECT  * FROM pet_clinic WHERE Pet_Name Like '$value%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { 
   
     ?>
     <tr>
     <td style="text-align: Center;"><?= $row['Pet_ID']?></td>
     <td style="text-align: Center;"><?= $row['Pet_Name']?></td>
     <td style="text-align: Center;"><?= $row['Owner']?></td>
     <td style="text-align: Center;"><?= $row['Contact_Number']?></td>
     </tr>

     <?php
  }
} else {
  echo "0 results";
}
$conn->close();

