<!DOCTYPE html>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Overseas Employement Placement</title>
</head>
<body onload="changeimage(3)">
<script type='text/javascript'>
var imageID=0;
function changeimage(every_seconds){
    //change the image
    if(!imageID){
        document.getElementById("temp").style.backgroundImage="url('1.jpg')";
        imageID++;
    }
    else{if(imageID==1){
        document.getElementById("temp").style.backgroundImage="url('2.jpg')";
        imageID++;
    }else{if(imageID==2){
        document.getElementById("temp").style.backgroundImage="url('4.jpg')";
        imageID=0;
    }}}
    //call same function again for x of seconds
    setTimeout("changeimage("+every_seconds+")",((every_seconds)*1000));
}
</script>




	<div class="start" id ="temp">
		<div id="form">
			<button class="changebtn" id="loginbtn">SIGN IN</button>
			<button class="changebtn" id="signupbtn">SIGN UP</button>
			<button class="closebtn"><span>x</span></button>
			

		<form id="signupform" align="center" action="\2nd year DBW project\php\profile.php" method="post">
			<br>
				<input type="text" name="Firstname"required placeholder="Firstname" style="width:148px;height: 30px">
				<input type="text" name="Lastname" required placeholder="Lastname" style="width:148px;height: 30px">
				<br>
				<input type="email" name="email" required placeholder="E-mail" style="width:300px;height: 30px">
				<br>
				<input type="password" id="pass" name="Password" required  placeholder="Password" style="width:300px;height: 30px">
				<br>
				<input type="Password" id="mat_pass"name="mat_password" required placeholder="Confirm Password" style="width:300px;height: 30px">
				<br>
				<label>Sign up as: </label>
				User
				<input type="radio" name="signas" value="user">
				Admin
				<input type="radio" name="signas" value="admin">
				<p></p>
				<button id="signupsbmt" class="sbmt">SIGN UP</button>
				<br>
		</form>
			
		<form id="signinform" align="center" action="\2nd year DBW project\php\profile.php" method="post" >
			<br><br>
			<label>Username:</label>
			<input type="email" name="email" required placeholder="Enter your Username" style="width:300px;height: 30px">
			<br>
			<label>Password:</label>
			<input type="Password"  name="password" required placeholder="Enter your Password" style="width:300px;height: 30px">
			<br><br>
			<button id="loginsbmt" class="sbmt">SIGN IN</button>
			<br>
			<p style="color: white ;font-size: 20px;"> <a href="https://www.nationalskillsnetwork.in/training-placements/">Why Create an Account?</a></p>
		</form>
		

		
		</div>
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

		<div class="navbar">
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="header.php">Career Path</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="quotes">
			<p> <strong>“If opportunity doesn’t knock, then build a door.” — Milton Berle</strong> </p>
		</div>
		<div class="signup">
			<form action="form.php">
				<input type="submit" id="button" name="signup" value="JOIN  US">
			</form>
		</div>

	</div>

	<div class="next">
		<h1>________________________________________________________</h1>
		<h2 class="heading" id="home"> Educational Job Placement Departments</h2>
		<p class="para">
			Colleges and universities typically have a placement program, meaning a placement officer will meet with students prior to graduation to discuss employment strategies. This placement offers helps you develop an appropriate job-seeking approach, depending on your education, skill levels and personal circumstances. This usually includes writing a resume, practicing interview techniques and going out on job leads the placement officer has already vetted. Employment placement departments may also help students and graduates secure internships, work-study opportunities and part-time employment.
		</p>
		<br>
		<h2 class="heading">Employment Placement Agencies</h2>
		<p class="para">
			Employment placement agencies work to create relationships with a number of large employers for whom they screen and place employees for both temporary and permanent positions. Signing up with an agency to help with your job search usually means working with a placement representative to discuss your career goals and objectives. Based on the information you supply and your credentials, the agency will arrange for you to interview with suitable employers they have contracts with for positions for which you’re qualified.
		</p>
		<br>
		<h2 class="heading"> Recruiters and Headhunters</h2>
		<p class="para">
			Recruiters and headhunters are people and companies that specialize in finding appropriate employees for high-level positions in different industries. A corporate recruiter may come seeking you with a placement opportunity, based on past performance or recommendation. You also have the option of approaching headhunting companies or executive recruiters and asking for representation.
		</p>
		<br>
		<br>
	</div>
	<br><br>
	<h1 class="change" id="about">Team members</h1>
		<br><br>
	<div class="last1">
		<p>
			<img src="darshan.jpg"height="250px" width="250px" class="img" >
		</p>
		<h2 class="heading">Darshan Salecha</h2>
			<p class="para">
				B.Tech JIIT Sec-62<br>
				Enrollment No :18103251<br>
				Branch: CSE<br>
				Batch:B8<br>
			
			</p>
	</div>
	
	<div class="last3">
		<p>
			<img src="shubham.jfif" height="250px" width="250px" class="img">
		</p>
		<h2 class="heading">Shubham Pathak</h2>
			<p class="para">
				B.Tech JIIT Sec-62<br>
				Enrollment No :18103265<br>
				Branch: CSE<br>
				Batch:B8<br>
			</p>
	</div>
	<div class="last2">
		<p>
			<img src="harsh.jpg" height="250px" width="250px" class="img">
		</p>
			<h2 class="heading">Harsh Shukla</h2>
			<p class="para">
				B.Tech JIIT Sec-62<br>
				Enrollment No :18103252<br>
				Branch: CSE<br>
				Batch:B8<br>
			</p>
	</div>
	<div class="last4">
		<p>
			<img src="kajal.jfif" height="250px" width="250px" class="img">
		</p>
			<h2 class="heading">Kajal Chaudhary</h2>
			<p class="para">
				B.Tech JIIT Sec-62<br>
				Enrollment No :18103256<br>
				Branch: CSE<br>
				Batch:B8<br>
			</p>
	</div>
<div id="footer">
<?php
include("footer.php");
?>
</div>

</body>
	<script type="text/javascript" src="dynamic.js"></script>

</html>