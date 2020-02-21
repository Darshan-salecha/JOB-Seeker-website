<?php
include("conn.php");
?>

<html>
<head>
<meta http-equiv= "content-type" content=" text/html; charset=utf-8"/>
<title>cong</title>
    <link rel="stylesheet" href="sign.css" type="text/css">
    <link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">
	</head>
<body>
<div class="signup">
<form method="post" action="">
<h2 style="color:#fff;">Sign Up</h2>
	<input type="text" name="fname"placeholder="First name" required><br><br>
	<input type="text" name="lname"placeholder="Last name" required><br><br>
	<input type="password" name="password"placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least
	one number and one uppercase and lowercase letter,	and at least 8 or more characters"  required><br><br>
	<input type="email" name="email"placeholder="Email address" required><br><br>
	<div class="temp">
	Sign Up as: User<input type="radio" name="signas" value="user" required>
	Admin<input type="radio" name="signas" value="admin" required>
	</div><br>
	<br>
	<input type="submit" value="Sign Up" name="submit"><br>
     <div id="msg" style="visibility:hidden;">Congratulation You Sign Up successfully!!</div>
	Already have account?<a href="form.php" style="text-decoration:none; font-family:'play',sans-serif; color:yellow">&nbsp;Log In</a>
	</form>
	 </div>
	 </body>
	 <html>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['password'];
$email=$_POST['email'];
$radio=$_POST['signas'];
	if($radio=="user")
    {       
       $q="insert into students values('$fname','$lname','$pwd','$email','')";
                  $result=mysqli_query($conn,$q);
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
        You successfully Sign Up As User<a id='close'>[close]</a>
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
	    $q="insert into admin values('$fname','$lname','$pwd','$email')";
                  $result=mysqli_query($conn,$q);
      echo "<meta charset='UTF-8'>
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
     .cssanimations.csstransforms #note 
	     {
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
        You successfully Sign Up As Admin<a id='close'>[close]</a>
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
   
}
?>
	 