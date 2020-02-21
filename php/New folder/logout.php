<html>
<head>
<meta http-equiv= "content-type" content=" text/html; charset=utf-8"/>
<title>cong</title>
    <link rel="stylesheet" href="cong.css" type="text/css">
    <link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">
	</head>
<body>
<script>
alert("You want to log out ?");
</script>

<div class="cong">
<form>
<h2 style="color:white">
<?php session_start(); 
error_reporting(0);
include("conn.php"); echo $_SESSION['user_name'];
 $userprofile=$_SESSION['user_name'];
 if($userprofile!=NULL)
 {
 $query="select * from students where email='$userprofile'";
$data= mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
echo "<center><br>".$result['fname']." ".$result['lname']."</center>"; 
session_unset();
echo "<center><h2 style='color:white; font-size:20px;'>Log Out successfully!!!</h2></center>";
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
        You successfully Sign Out<a id='close'>[close]</a>
    </div>
    </div>
		
  <script>
   close = document.getElementById('close');
   close.addEventListener('click', function() {
     note = document.getElementById('note');
     note.style.display = 'none';
   }, false);
  </script>";
 }
else
{	
echo "<center><h2 style='color:white; font-size:20px;'><br>You are not Log In!!!</h2></center>";
 }
 
 ?> 
 </h2>
<center><a href="homepage.php" style="text-decoration:none">Go back to Home page</a></center>
</form>
</div>
</body>
</html>