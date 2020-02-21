<?php
include("conn.php");
?>


<html>
<head>
<meta http-equiv= "content-type" content=" text/html; charset=utf-8"/>
<title>Login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">
	</head>
	<body>
	
	<div class="signin">
	<form method="post" action="">
	<h2 style="color:white">Log In</h2>
	<input type="text" name="username"placeholder="Username" required>
	<input type="password" id="pwd" name="password"placeholder="Password"  required>
	<br><br><br>
	<div class="temp">
	Log In as: User<input type="radio" name="signas" value="user" required>
	Admin<input type="radio" name="signas" value="admin" required>
	</div>		
	<br><br>
	<input type="submit" value="Log In" name="submit"><br><br>
	<div id="container">
	<a href="#" style="margin-right:0px; font-size:13px; font-family:Tahoma,Geneva,sans-serif; ">Reset Password</a>
	<a href="#" style="margin-right:0px; font-size:13px; font-family:Tahoma,Geneva,sans-serif;">forgot Password</a>
    </div><br><br>
	Don't have account?<a href="signup.php"  >&nbsp;Sign Up</a>
	<?php
	session_start();
	error_reporting(0);
if(isset($_POST['submit']))
{
   $user=$_POST['username'];
    $pwd=$_POST['password'];
	$radio=$_POST['signas'];
	if($radio=="user")
	{		
		
       $query="select* from students where email='$user' and password='$pwd'";
       $data=mysqli_query($conn,$query);
            if(mysqli_num_rows($data)==1)
            {
	           $_SESSION['user_name']=$user;
	           header('location:user_interface.php');
            }
           else
            {
	          echo "<br><br><div style='color:Yellow; font-size:20px; text-align:center;' >"."!.....Login failed.....!"."</div>";
            }
    }
	if($radio=="admin")
	{	 
       $query="select* from admin where email='$user' and password='$pwd'";
       $data=mysqli_query($conn,$query);
            if(mysqli_num_rows($data)==1)
            {
	           $_SESSION['admin']=$user;
	           header('location:career path.php');
            }
           else
            {
	          echo "<br><br><div style='color:Yellow; font-size:20px; text-align:center;' >"."!.....Login failed.....!"."</div>";
            }
	}
}

?>
	</form>
	</div>
	</body>
	</html>















