<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="user_detail";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if($conn)
  {
    $firstname=$_POST['Firstname'];
    $lastname=$_POST['Lastname'];
    $email=$_POST['email'];
    $pass=$_POST['Password'];
    $param_pass=password_hash($pass,PASSWORD_DEFAULT);
    $check="SELECT email from user_table WHERE email ='$email'";
    $check_res=mysqli_query($conn,$check);
    if(mysqli_num_rows($check_res)==0)
    {
    $query="INSERT INTO user_table values('$firstname','$lastname','$email','$param_pass')";
    $res=mysqli_query($conn,$query);
    }
    else
    {
    }
    
  }
?>







<!DOCTYPE html>
<html>
<head>
	<title>User profile</title>
  <link rel="stylesheet" type="text/css" href="\2nd year DBW project\css\profileoage.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/start/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

</head>
<body>
	<div id="head">
        <div class="jobs">
            <p><img src="https://cdn.pixabay.com/photo/2016/08/25/07/30/orange-1618917_960_720.png" width="150px" height="60px">
            <strong>Overseas Employement Placement</strong> 
            </p>
          <div id="small1">
            <p class="para">
              Choose a job you love!
           </p>
          </div>
      
      </div>
      <div id="welcome" align="right">
        HELLO
      </div>
      <div class="navbar">
      <nav>
        <ul>
          <li><a href="homepage.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#">Career Path</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>

  </div>
  <div id="isloading">
    <div id="ready">
        We are getting everything ready for you !!!  
    </div>
  	<div id="loadingbar">
		        <div id="label" align="center" style="position: absolute; left:35%">Preparing Your Profile...</div>
	  </div>
  </div>
</body>
  <script type="text/javascript" src="\2nd year DBW project\javascript\profilepage.js"></script>
</html>