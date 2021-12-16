<?php

error_reporting(0);

include "config.php";

    $id = $_GET['id'];
    $id_user = $_GET['id_user'];

    if($id != null){
        $conn->query("DELETE FROM pet_table WHERE pet_id = $id") or die($mysqli->error());
	    echo "<script>alert('Delete  Successful!');window.location.href='../pet.php';</script>";
    }
	if($id_user != null){
        $conn->query("DELETE FROM user_table WHERE user_id = $id_user") or die($mysqli->error());
	    echo "<script>alert('Delete  Successful!');window.location.href='../user.php';</script>";
    }

?>