<?php
	session_start(); 
error_reporting(0);
include("conn.php"); 
include 'header.php';
$email= $_SESSION['user_name'];
if($conn)
		{
			$query="select fname,lname from students where email='".$email."'";
			$c=mysqli_query($conn,$query);
			$b=mysqli_fetch_array($c,MYSQLI_ASSOC);
			$first_name= $b['fname'];
			$last_name=$b['lname'];
			$query="select skill from students where email='".$email."'";
			$c=mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($c,MYSQLI_ASSOC))
			{
				$skill= $row['skill'];
			}
			
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply for Job</title>
	<link rel="stylesheet" type="text/css" href="user_interface.css">
</head>
<body>
<h2 style="color:white"></h2>

	<p id="inner" style="text-transform: uppercase;" align="center">
			<?php
			if(isset($_POST['Apply']))
			{
				$query="insert into job_applicant values('".$first_name." ".$last_name."','".$skill."','".$_POST['job_name']."','".$_POST['company']."')";
				$res=mysqli_query($conn,$query);
				if($res)
				{
					echo "Congratulations you successfully applied for Job";
				}
			}
			?>

	</p>
	<p align="center">
		<a href="user_interface.php">Back to Profile</a>
	</p>
</body>
</html>