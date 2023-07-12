<?php

session_start();


$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

$p_0 = " select * from pattern_0";

$result = mysqli_query($con, $p_0);
// echo $result;
$row_count = mysqli_num_rows($result);


function months($m)
{
	$m = $m-1;
	$month = array("Jan", "Feb", "Mar","Apr", "May", "Jun","Jul", "Aug", "Sep","Oct", "Nov", "Dec");
	return $month[$m] ;
}

echo months(02);
echo months(05);
echo months(10);
echo months(12);

?>


<?php
for($i=1; $i<=$row_count; $i++)
{
	$row = mysqli_fetch_array($result);
	if ($row_count==$i)
	{
		?>
		<?php echo $row["id"]?>
		<?php echo number_format($row["ser_prdf"][5].$row["ser_prdf"][6]);echo " / "; echo $row["ser_prdl"]; ?>
		<?php echo $row["cus_num"]; ?>
		<?php echo $row["meter_num"]; ?>
		<?php echo $row["serv_add"]; ?>
		<?php echo $row["last_yr"]; ?>
		<?php echo $row["last_rd"]; ?>
		<?php echo $row["curnt_read"]; ?>
		<?php echo $row["usag"]; ?>
		<?php echo $row["cty_tax"]; ?>
		<?php echo $row["irrg"]; ?>
		<?php echo $row["tot_pay"]; ?>
		<?php
	}
}

?>