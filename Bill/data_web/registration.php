<?php

session_start();
header('location:sign_in_up.php');

$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$s = " select * from login where name = '$name'";

$_result = mysqli_query($con, $s);

$reg = " insert into login values ('$name','$email','$pass')";
mysqli_query($con, $reg);
echo " Registration Successful";

?>