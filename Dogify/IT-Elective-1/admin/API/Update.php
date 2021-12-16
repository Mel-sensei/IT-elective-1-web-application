<?php
include "config.php";

if(isset($_POST['pet'])){

        $pet_id	 = $_POST['pet_id'];
        $user_id	 = $_POST['user_id'];
        $pet_image = 	$_POST['pet_image'];
        $pet_name	 = $_POST['name'];
        $pet_breed = 	$_POST['breed'];
        $pet_age	 = $_POST['age'];
        $pet_gender = 	$_POST['gender'];
        $pet_bio	 = $_POST['content'];
        $pet_address = 	$_POST['adds'];
        $pet_stats = 	$_POST['stats'];

            

            $borrow =  $conn->query("UPDATE pet_table SET 
                                            user_id	= '$user_id',
                                            pet_image = '$pet_image',
                                            pet_name = '$pet_name',
                                            pet_breed = '$pet_breed',
                                            pet_age	= '$pet_age',
                                            pet_gender	= '$pet_gender',
                                            pet_bio	= '$pet_bio',
                                            pet_address	= '$pet_address',
                                            pet_stats	= '$pet_stats'
                                        WHERE pet_id = '$pet_id' ");	
                            
                            
                            echo "<script>alert('Welcome Admin');window.location.href='../pet.php';</script>";
}

if(isset($_POST['user'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname.' '.$lname;
    $adds = $_POST['adds'];
    $email = $_POST['email'];
    $cn	 = $_POST['cn'];
    $user_id = 	$_POST['user_id'];
    $pass = $_POST['pass'];
    $image = $_POST['image'];

        $borrow =  $conn->query("UPDATE user_table SET 
                                        user_fullname = '$fullname',
                                        user_image = '$image',
                                        user_address = '$adds',
                                        user_email = '$email',
                                        user_cn	= '$cn',
                                        password = '$pass'
                                    WHERE user_id = '$user_id' ");	
                        
                        
                    echo "<script>alert('Welcome Admin');window.location.href='../user.php';</script>";
}                         
                        
?>