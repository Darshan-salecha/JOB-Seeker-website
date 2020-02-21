<?php
include("conn.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>How to make a footer fully responsive in html and css</title>
<link href="sty.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css? family=play"rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
<div class="footer-wrapper">
  <div class="top-img"></div>
  <div class="container-fluid">
    <div class="footer-social-icons">
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-wechat"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>

    <div class="footer-mid-part">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-one">
            <div class="footer-heading"><h2>Contact Us</h2></div>
 <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
            <div class="footer-contact-text">
              <p><a href="https://www.google.com/maps/place/JAYPEE+INSTITUTE+OF+INFORMATION+TECHNOLOGY/@28.6297338,77.3698669,17z/data=!3m1!4b1!4m5!3m4!1s0x390ce551491b3ce7:0x7335d9fcfd4d9db0!8m2!3d28.6297291!4d77.3720556">Address: Jaypee CollegeA. Noida 196  Circle Mobile, FL 36602</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
            <div class="footer-contact-text">
              <p><a href="tel:7426880117">+7426880117</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
            <div class="footer-contact-text">
              <p><a href="fax:7426880117">+7426880117</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
            <div class="footer-contact-text">
              <p><a href="mailto:darshanjain2777@gmail.com">info@project.com</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
            <div class="footer-contact-text">
               <p><a href="http://www.google.com">http://www.DHSK.com</a></p>
            </div>
            <div class="clr"></div>
          </div>


          </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-two">
            <div class="footer-heading"><h2>Quick Link</h2></div>
            <div class="footer-link">
              <ul>
                <li><a href="#">Home</a></li>
                 <li><a href="#">About Us</a></li>
                  <li><a href="#">Web Services</a></li>
                   <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Marketing</a></li>
                     <li><a href="#">Services</a></li>
                      <li><a href="#">Training</a></li>
                       <li><a href="#">Contact Us</a></li>
                       
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-two">
            <div class="footer-heading"><h2>Our Services</h2></div>
             <div class="footer-link">
              <ul>
                <li><a href="#">Linux Hosting</a></li>
                 <li><a href="#">Windows Hosting</a></li>
                  <li><a href="#">Domain Registration</a></li>
                   <li><a href="#">SEO Promotion</a></li>
                    <li><a href="#">Our Plans</a></li>
                     <li><a href="#">Latest Offers</a></li>
                      <li><a href="#">Sitemap</a></li>
                       <li><a href="#">Website Maintenance</a></li>
                       
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-three">
            <div class="footer-heading"><h2>Get in touch -<br> Give feedback :</h2></div>
             <div class="footer-form">
               <form method="post">
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Here...." name="feedback" required>
                 </div>
               
                 <div class="footer-form-box">
                   <input type="submit" class="footer-form-submit-style" value="SUBMIT" name="feed">
                 </div>
<?php
 
if(isset($_POST['feed']))
{
	$feedback=$_POST['feedback'];
	if($user=="")
	{
	echo "<h2 style='color:white;'>You are not login</h2>";	
    }
	else
	{	
        $q="insert into review values('$feedback')";
        $result=mysqli_query($conn,$q);
		echo "<h2 style='color:white;'>Thank-you for your feedback</h2>";	

    }
}	
?>
               </form>
             </div>
          </div>
        </div>
      </div>
    </div>
 <div class="footer-bottom">
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
       <p>Copyright 2018  All Rights Reserved</p>
     </div>
   </div>
 </div>


  </div>
</div>

</body>
</html>
