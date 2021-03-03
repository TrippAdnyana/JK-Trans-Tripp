<?php

include '../conn.php';

$username 	= $_POST['username'];
$password 	= $_POST['password'];

$data 		= mysqli_query($conn,"SELECT * FROM tb_login WHERE username='$username' AND password='$password'");
$check 		= mysqli_num_rows($data);

if($check > 0){
	header("location:../home.php");
}else{
	header("location:../index.php");
}

?>