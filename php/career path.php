<?php
include("conn.php");
session_start();
$val=4;
$val2=5;
?>


<!DOCTYPE html> 
<html>
<head>
<link href="path.css" rel="stylesheet" type="text/css">
<meta http-equiv= "content-type" content=" text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">

	<title>Overseas Employement Placement</title>
</head>
<body>

<div id="header">
<?php
include("header.php");
?>
</div>
<form method="POST">
<input type="submit" id="btn"  name="search" value="Details" >
</form>
<img src="pic.jpg">

<div class="right" id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var x="<?php echo $val ?>";
  y=eval(x);
  var w="<?php echo $val2 ?>";
  q=eval(w);
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Vacancy',y],
  ['Employement', q]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<div class="fix">

<table>
          <tr>
              <th>Company-Name</th>
              <th>&nbspJob-Name</th>
              <th>&nbspLoction</th>
			  <th>&nbsp&nbsp&nbspUpdate</th>
          </tr>
<?php
if(isset($_POST['search']))
{
           $q="select distinct* from job";
           $result=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($result))
	{	
	 echo"<tr>
	      <td>".$row['company_name']."</td><td>".$row['job_name']."</td><td>".$row['location']."</td></tr>";
	}
 }
?>
</table>;
	
</div>
<center>
<div class="right2">
<form method="post" action="">
<h2 style="color:#fff;display:inline;">UP To Date</h2>
<br><br>
	<input type="text" name="company_name"placeholder="Company Name" required> <br><br>
	<input type="text" name="job_name"placeholder="Job Name" required> <br><br>
	<input type="text" name="location"placeholder="Location" required> <br><br>
	<input type="text" name="functional_area" placeholder="Functional Area" required> <br><br>
	<input type="number" name="nos_of_jobs" placeholder="vacancy" required> <br><br>
	<br>
	<input type="submit" value="Up-Load" name="submit"><br>
	<?php
   if(isset($_POST['submit']))
{
$cname=$_POST['company_name'];
$jname=$_POST['job_name'];
$loc=$_POST['location'];
$FA=$_POST['functional_area'];
$no=$_POST['nos_of_jobs'];
$q="insert into job values('$cname','$jname','$loc','$FA',$no)";
$result=mysqli_query($conn,$q);
}
?>
	</form>

</div>
</center>
<?php
 $userprofile=$_SESSION['admin'];
 $query="select * from admin where email='$userprofile'";
$data= mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data); 
$temp=$result['aname'];
echo "	<meta charset='UTF-8'>
	<script src='js/modernizr.custom.80028.js'></script>
	
	<title>Pop From Top Message</title>
	
	<link rel='stylesheet' href='css/style.css'>
	
	<style>
    #note {
        position: absolute;
        z-index: 6001;
        top: 0;
        left: 0;
        right: 0;
        background: #fde073;
        text-align: center;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    }
    .cssanimations.csstransforms #note {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
    }

    #close {
      position: absolute;
      right: 10px;
      top: 9px;
      text-indent: -9999px;
      background: url(images/close.png);
      height: 16px;
      width: 16px;
      cursor: pointer;
    }
    .cssanimations.csstransforms #close {
      display: none;
    }
    
    @-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
    }
    @-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
    }
	</style>
	
</head>

<body>

	<div id='page-wrap'>
		
    <div id='note'>
    !....Welcome....!"." ".$temp."
	<a id='close'>[close]</a>
    </div>
    </div>
		
  <script>
   close = document.getElementById('close');
   close.addEventListener('click', function() {
     note = document.getElementById('note');
     note.style.display = 'none';
   }, false);
  </script>";
 ?>
<div id="footer" id="foot">
<?php
include("footer.php");
?>
</div>
</body>
</html>


 
 
 
 
 
 
 
 
 




