<?php

$registration = array(
    'Pet_ID' => "'" . $_POST['inp_pID'] . "'", 
    'pet_name' =>  "'" . $_POST['inp_pname'] . "'",
    'pet_species' =>  "'" . $_POST['inp_pspecies'] . "'",
    'pet_breed' => "'" . $_POST['inp_pbreed'] . "'",
    'pet_birth' => "'" . $_POST['inp_page'] . "'",
    'pet_sex' =>  "'" . $_POST['inp_pgender'] . "'",
    'pet_color' =>  "'" . $_POST['inp_pcolor'] . "'",
    'o_fname' =>  "'" . $_POST['inp_fname'] . "'",
    'o_lastname' => "'" . $_POST['inp_lname'] . "'",
    'o_mname' =>  "'" . $_POST['inp_mname'] . "'",
    'o_extname' =>  "'" . $_POST['inp_extname'] . "'",
    'o_address' => "'" . $_POST['inp_add'] . "'", 
    'o_contactnumber' =>  "'" . $_POST['inp_num'] . "'",
);

save($registration);

function save($data){
    
    include('../config/database.php');

    
    $petId = $data['Pet_ID'];
    $checkDuplicateQuery = "SELECT Pet_ID FROM t_pet_ownerinfo WHERE Pet_ID = $petId";
    $result = $conn->query($checkDuplicateQuery);

    if ($result->num_rows > 0) {
        header('location: /web-page/Registration.php?invalid');
        exit();
    }


    $attributes = implode(",", array_keys($data));
    $values = implode(",", array_values($data));
    $query = "INSERT INTO t_pet_ownerinfo ($attributes) VALUES ($values)";

    if ($conn->query($query) === TRUE) {
        header('location: /web-page/Registration.php?success');
        exit();
    } else {
        header('location: /web-page/Registration.php?invalid');
        exit();
    }
}
?>
