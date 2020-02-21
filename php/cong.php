<html>
<head>
<meta http-equiv= "content-type" content=" text/html; charset=utf-8"/>
<title>cong</title>
    <link rel="stylesheet" href="cong.css" type="text/css">
    <link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">
	</head>
<body>
<div class="cong">
<form>
<h2 style="color:white">Welcome...<?php session_start(); include("conn.php"); echo $_SESSION['user_name'];
 $userprofile=$_SESSION['user_name'];
 $query="select * from students where fname='$userprofile'";
$data= mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data); 
echo "<br><br>".$result['email']; ?> <br>Log In successfully!!!</h2>
<a href="form.php" style="text-decoration:none">Go back to Home page</a>
<br>
<br>
</form>
</div>
</body>
</html>