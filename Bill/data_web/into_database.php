<?php
	session_start();
	 header('location:home.php');

	$pattern = $_SESSION['pattern'];
	$ser_prdf = date($_SESSION['ser_prdf']);
	$ser_prdl = date($_SESSION['ser_prdl']);

	$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

    $cus_num = $_POST['cus_num'];
    $ser_add = $_POST['ser_add'];
    $metr_no = $_POST['metr_no'];
    $lt_year = $_POST['lt_year'];
    $lt_read = $_POST['lt_read'];
    $ct_read = $_POST['ct_read'];
    $usage = $_POST['usage'];
    $sewer = $_POST['sewer'];
    $cty_tx = $_POST['cty_tx'];
    $water = $_POST['water'];
    $stromwt = $_POST['stromwt'];
    $tot_pay = $_POST['tot_pay'];
    $id = $cus_num.$ser_prdf;


    $reg = " insert into pattern_1 values ('$id', '$cus_num', '$metr_no', '$tot_pay', '$ser_add ', '$sewer', '$stromwt', '$cty_tx', '$water', '$lt_year', '$lt_read', '$ct_read', '$usage', '$ser_prdf', '$ser_prdl')";
	mysqli_query($con, $reg);
	// echo " Registration Successful";
    echo $reg;
?>


<!-- ('$cus_num', '$metr_no', '$tot_pay', '$ser_add ', '$sewer', '$stromwt', '$cty_tx', '$water', '$lt_year', '$lt_read', '$ct_read', '$usage', '$ser_prdf', '$ser_prdf') -->




 
 
 



