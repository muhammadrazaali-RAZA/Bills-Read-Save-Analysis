<?php

session_start();

function months($m)
{
  $m = $m-1;
  $month = array("Jan", "Feb", "Mar","Apr", "May", "Jun","Jul", "Aug", "Sep","Oct", "Nov", "Dec");
  return $month[$m] ;
}

$con = mysqli_connect('localhost', 'root', '', 'bill_analysis');

$p_0 = " select * from pattern_0";

$result = mysqli_query($con, $p_0);
$ary = array();
$pay = array();
while ($row = mysqli_fetch_array($result))
{
    array_push($ary, "['".months(number_format($row["ser_prdf"][5].$row["ser_prdf"][6]))."-".months(number_format($row["ser_prdl"][5].$row["ser_prdl"][6]))." : $".$row["irrg"]."',".$row["irrg"]."], ");
    array_push($pay, "['".months(number_format($row["ser_prdf"][5].$row["ser_prdf"][6]))."-".months(number_format($row["ser_prdl"][5].$row["ser_prdl"][6]))." : $".$row["tot_pay"]."',".$row["tot_pay"]."], ");
}
// echo $ct."   ".$ig."   ".$tp;
?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<div id="pay" ></div>
<div id="irrg"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart_pay);

// Draw the chart and set the chart values
function drawChart_pay() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'payable Bill per Month'],
  <?php
      for($j=0; $j<count($pay); $j++)
      {
          echo $pay[$j];
      }

    ?>
    ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Number of percent Amount weighted overall ', 'width':720, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('pay'));
  chart.draw(data, options);
}


// <!-- ////// 2nd //////////////////// -->
</script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task','Irrigation per Month'],
    <?php
      for($j=0; $j<count($ary); $j++)
      {
          echo $ary[$j];
      }

    ?>
    ]);


  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Number of percent Irrigation weighted overall', 'width':720, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('irrg'));
  chart.draw(data, options);
}





</script>

</body>
</html>
