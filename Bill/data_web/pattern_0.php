<?php
    session_start();
    $my_file = fopen("temp/values.txt", "rw");

    $pattern = fgets($my_file);
    $cus_num = fgets($my_file);
    $ser_prdf = fgets($my_file);
    $ser_prdl = fgets($my_file);
    $ser_add = fgets($my_file);
    $metr_no = fgets($my_file);
    $lt_year = fgets($my_file);
    $lt_read = fgets($my_file);
    $ct_read = fgets($my_file);
    $usage = fgets($my_file);
    $cty_tx = fgets($my_file);
    $irrg = fgets($my_file);
    $tot_pay = fgets($my_file);

    $_SESSION['pattern'] = $pattern;
    $_SESSION['ser_prdf'] = $ser_prdf;
    $_SESSION['ser_prdl'] = $ser_prdl;

    fclose($my_file);
?>

<style>
.login,
.image {
    min-height: 100vh;
    color: #999999;
    font-family: "Roboto", sans-serif;
}

.bg-image {
    background-size: cover;
    background-position: center center;
}

p {
    color: #999999;
}

a {
    color: #4285f4;
}

a:hover {
    text-decoration: none;
    color: #0f459b;
}

.display-4 {
    font-size: 40px;
    color: #999999;
}

#inputStudentID,
#inputPassword {
    padding: 25px 0 25px 12px;
}
 
</style>

<script type="text/javascript">
window.onload = choosePic;

function choosePic() {
    document.getElementById("myPicture").src = "temp/img.jpg";
}
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>data retrive</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

</body>
</html>

 <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-7 d-none d-md-flex bg-image">
            <img id="myPicture" class="w-100">
        </div>

        <!-- The content half -->
        <div class="col-md-5">
            <div class="login d-flex align-items-center py-5">

        <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-7 mx-auto">
               <h3 class="display-4">Pattern <?php echo $pattern; ?></h3>
                 <form action="into_database_0.php" method="post">
                  <div class="form-group mb-4">
<label for="cus_num">Customer Number</label>        
<input type="text" name="cus_num" value="<?php echo $cus_num; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="metr_no">Meter Number</label>        
<input type="text" name="metr_no" value="<?php echo $metr_no; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="tot_pay">Total Payment</label>        
<input type="text" name="tot_pay" value="<?php echo $tot_pay; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="ser_add">Service Address</label>        
<input type="text" name="ser_add" value="<?php echo $ser_add; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="irrg">IRRIGATION</label>        
<input type="text" name="irrg" value="<?php echo $irrg; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="cty_tx">City Tax</label>        
<input type="text" name="cty_tx" value="<?php echo $cty_tx; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="ser_prd">Service Period</label>        
<input type="text" name="ser_prd" value="<?php echo $ser_prdf; echo " - "; echo $ser_prdl; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="lt_year">Last Year</label>        
<input type="text" name="lt_year" value="<?php echo $lt_year; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="lt_read">Last Read</label>        
<input type="text" name="lt_read" value="<?php echo $lt_read; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="ct_read">Current Read</label>        
<input type="text" name="ct_read" value="<?php echo $ct_read; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
                  <div class="form-group mb-4">
<label for="usage">usage</label>        
<input type="text" name="usage" value="<?php echo $usage; ?>"
required="required" autofocus=""class="form-control border-3 shadow-sm px-6">
                  </div>
<button type="submit" style="margin-left: 1px"
class="btn btn-block text-uppercase mb-3 border-3 shadow-sm">Confirm</button>

                   </form>
                 </div>
                </div>
             </div>
           </div>
        </div>
    </div>
</div>