<?php

session_start();


$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

$name = $_POST['user'];
$pass = $_POST['pass'];

$s = " select * from login where name = '$name' && pass = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1 ){
	header('location:home.php');
}else{
	header('location:sign_in_up.php');
}

?>
