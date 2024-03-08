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
     <td><?= $row['Pet_ID']?></td>
     <td><?= $row['Pet_Name']?></td>
     <td><?= $row['Owner']?></td>
     <td><?= $row['Contact_Number']?></td>
     <td class="d-grid">
        <button type="button" class="btn btn-sm btn-block btn-success" data-bs-toggle="modal" data-bs-target="#myModal">view info</button>
     </td>
     </tr>

     <?php
  }
} else {
  echo "0 results";
}
$conn->close();

