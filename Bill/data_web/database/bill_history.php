<?php

session_start();


$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

$p_0 = " select * from pattern_0";

$result = mysqli_query($con, $p_0);
// echo $result;
$row_count = mysqli_num_rows($result);
?>
<html>
<had><title>Database Projection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</had>
<body>
<div class="table-box">
      <h1 style="color: #ff9900; font-family: 'Helvetica Neue', sans-serif; font-size: 98px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;">Pattern 0</h1>
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p>ID</p>
            </div>
            <div class="table-cell">
                <p>Service Period</p>
            </div>
            <div class="table-cell">
                <p>Customer Number</p>
            </div>
            <div class="table-cell">
                <p>Meter Number</p>
            </div>
            <div class="table-cell">
                <p>Service Address</p>
            </div>
            <div class="table-cell">
                <p>Last Year Usage</p>
            </div>
            <div class="table-cell">
                <p>Last Read</p>
            </div>
            <div class="table-cell">
                <p>Current Read</p>
            </div>
            <div class="table-cell">
                <p>Usage</p>
            </div>
            <div class="table-cell">
                <p>City Tax</p>
            </div>
            <div class="table-cell">
                <p>Irrigation</p>
            </div>
            <div class="table-cell last-cell">
                <p>Total Amount</p>
            </div> 
        </div>


<?php
for($i=1; $i<=$row_count; $i++)
{
    $row = mysqli_fetch_array($result);
?>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p><?php echo $row["id"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["ser_prdf"]; echo " / "; echo $row["ser_prdl"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["cus_num"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["meter_num"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["serv_add"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["last_yr"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["last_rd"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["curnt_read"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["usag"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["cty_tax"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["irrg"]; ?></p>
            </div>
            <div class="table-cell last-cell">
                <p><?php echo $row["tot_pay"]; ?></p>
            </div>   
        </div>

<?php
    }
?>
</div>
<?php
$p_1 = " select * from pattern_1";

$result_1 = mysqli_query($con, $p_1);

$row_count_1 = mysqli_num_rows($result_1);
?>

<div class="table-box">
    <h1 style="color: #ff9900; font-family: 'Helvetica Neue', sans-serif; font-size: 98px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;">Pattern 1</h1>
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p>ID</p>
            </div>
            <div class="table-cell">
                <p>Service Period</p>
            </div>
            <div class="table-cell">
                <p>Customer Number</p>
            </div>
            <div class="table-cell">
                <p>Meter Number</p>
            </div>
            <div class="table-cell">
                <p>Service Address</p>
            </div>
            <div class="table-cell">
                <p>Last Year Usage</p>
            </div>
            <div class="table-cell">
                <p>Last Read</p>
            </div>
            <div class="table-cell">
                <p>Current Read</p>
            </div>
            <div class="table-cell">
                <p>Usage</p>
            </div>
            <div class="table-cell">
                <p>City Tax</p>
            </div>
            <div class="table-cell">
                <p>Sewer</p>
            </div>
            <div class="table-cell">
                <p>Water</p>
            </div>
            <div class="table-cell">
                <p>City StormWater</p>
            </div>
            <div class="table-cell last-cell">
                <p>Total Amount</p>
            </div> 
        </div>


<?php
for($i=1; $i<=$row_count_1; $i++)
{
    $row_1 = mysqli_fetch_array($result_1);
?>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p><?php echo $row_1["id"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["ser_prdf"]; echo " / "; echo $row_1["ser_prdl"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["cus_num"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["meter_num"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["serv_add"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["last_yr"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["last_rd"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["curnt_read"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["usag"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["cty_tax"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["sewer"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["water"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row_1["stormwater"]; ?></p>
            </div>
            <div class="table-cell last-cell">
                <p><?php echo $row_1["tot_pay"]; ?></p>
            </div>   
        </div>

<?php
    }
?>
</div>   
</body>
</html>