<!DOCTYPE html>
<html>
<head>
	<title>User Interface</title>
	<link rel="stylesheet" type="text/css" href="user_interface.css">
</head>
<body>
	<?php
	include 'header.php';
	$servername="localhost";
 	 $username="root";
  	$password="";
  	$dbname="dbw";

  	$conn=mysqli_connect($servername,$username,$password,$dbname);
	session_start();
	?>
	<div id="left" >
		<p><img src="https://cdn.pixabay.com/photo/2016/08/25/07/30/orange-1618917_960_720.png" width="150px" height="60px" id="img1">
			<strong>Overseas Employement</strong> 
		</p>
		<center>
		<p id="wel"><?php
		$email= $_SESSION['user_name'];
		if($conn)
		{
			$query="select fname,lname from students where email='".$email."'";
			$c=mysqli_query($conn,$query);
			$b=mysqli_fetch_array($c,MYSQLI_ASSOC);
			$first_name= $b['fname'];
			$last_name=$b['lname'];
			echo "Welcome ".$first_name." ".$last_name;
		}
		?>
		</p>
		<p id="add">Change your skill to filter job  </p>
		
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="custom-select">
				<select name="categories" id="categories" >
					<?php 
					$query="select distinct functional_area from job";
					$c=mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($c,MYSQLI_ASSOC))
				{
    				echo "<option value='".$row['functional_area']."'>".$row['functional_area']."</option>";
				}
						?>  
				</select>
			</div>
				<input type="submit" name="go" value="Add" id="btn1">
				<?php
					if(isset($_POST['categories']))
					{
						$query="update students set skill='".$_POST['categories']."'where email='".$email."'";
						$c=mysqli_query($conn,$query);
					}
				?>
		</form>
		<br>
			Your Skill: <?php 
			$query="select skill from students where email='".$email."'";
			$c=mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($c,MYSQLI_ASSOC))
			{
				$skill= $row['skill'];
			}
			echo $skill."<br>";
		 ?>
		 <br>
		 <h2>Jobs as per your skills</h2>
		 <br>
		 <li>
		 <?php
		 	$query="select distinct job_name from job where functional_area='".$skill."'";
		 	$c=mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($c,MYSQLI_ASSOC))
			{
				echo $row['job_name'];
			}
		 ?>
		</li>
		<br><br>
		<form action="apply.php" method="post">
			<input type="text" name="job_name" placeholder="Enter Job Name" id="temp">
			<select name="company" id="categories" >
					<?php 
					$query="select distinct company_name from job";
					$c=mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($c,MYSQLI_ASSOC))
				{
    				echo "<option value='".$row['company_name']."'>".$row['company_name']."</option>";
				}
						?>  
				</select>
			<br><br>

			<input type="submit" name="Apply" value="Apply For Job" id="btn1" >
		</form>
	</center>
	</div>
	<div id="center">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" placeholder="Location" name="location" value="">
			<input type="submit" id="btn1" value="Search" >
			<br><br>
		</form>
		<div id="hid">
			<?php
			$count=0;
			if(isset($_POST['location']))
			{
					echo "<table>
					<tr> 
						<td>JOB</td>
						<td>COMPANY NAME</td>
						<td>LOCATION</td>
						<td>FUNCTIONAL AREA</td>
						<td>VACANT SEAT</td>
					</tr>";
					$query="select*from job where location='".$_POST['location']."'";
					$c=mysqli_query($conn,$query);
					while ($row=mysqli_fetch_array($c,MYSQLI_ASSOC))
					{
						$count++;
						echo "<tr>
							<td>".$row['job_name']."</td><td>".$row['company_name']."</td><td>".$row['location']."</td><td>".$row['functional_area']."</td><td>".$row['nos_of_jobs']."</td>
						</tr>";
					}
					if ($count==0) {
						echo "<p id='no'>No Jobs in such location available in our database!<p>";
					}
			}
			else
			{
				echo "
				<html>
				<body>
					<div id='inner'>
					<h2>How long it will take to enter your CV on website?</h2>
					The entire process should only take about less than 10 minutes. If you have a Word document open at the same time you can easily copy and paste the text from one to the other. Once you have registered, you can re-visit website/jobs as often as you like to add / modify details to your CV.
					<h2>What information you need to enter?</h2>
					Add your details to website/jobs you will need to complete a section for each piece of different data. That is a section for each different period of education, a section for each different period of employment or different position held, a separate section for each reference you are offering, a section in which you can provide a summary of your career to date and future aspirations
					<h2>How to apply for job?</h2>
					Choose your email id (this will be your Username) carefully, note that it cannot be changed later, so choose carefully. Make sure that you use a valid email address. After filling out the sign up form, an email will be sent to this address, to confirm that you have signed up. Also, you will need this if you forget your password. We also use it to send you important messages about your Job Application.

					Attach your latest resume and click on save.
					After the successfull account registration your login info will be sent on your registered email id. Then you can login and make the changes in your profile anytime.
						If you already have an account, you do not need to sign up for a new one. You can login into your existing account and manage your profile, search for job postings, apply for no. of jobs etc.
						If you forgot your passowrd then:
						Go to forgot password page.
						Enter your email address.
						If you used that email address for your registration, you'll get email with instructions to reset your password.
						If an error occurs, try another email address.
					</div>
				</body>
				</html>";
			}
			?>
		</div>
		
	</div>

</body>
</html>