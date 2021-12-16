<?php
session_start();

include "config.php";

$Username = $_POST['username'];
$Password = $_POST['password'];

$result = $conn->query("SELECT * FROM admin_acc	WHERE admin_username = '$Username' AND admin_password = '$Password'");
$user = $result -> num_rows;	

	if($user == 1){
		$_SESSION['admin_user'] = $Username;
		$_SESSION['admin_pass'] = $Password;
		echo "<script>alert('Welcome Admin');window.location.href='../index.html';</script>";
	}else{
		echo "<script>alert('login Failed!');history.back();</script>";
	}
?>