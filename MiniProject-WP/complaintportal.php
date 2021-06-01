<!DOCTYPE html>
<html lang="en">
<head>
	<title> NMIMS Complaint Portal</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content= "width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
function myFunction() {
  	var x = document.getElementById("myTopnav");
  	if (x.className === "topnav") {
   	 x.className += " responsive";
  	} 
	else {
    	x.className = "topnav";
  	}
}
</script>

<nav class="topnav">
	<a class="active" href="#logo">HOME</a>
	<a href="s_login.php" target="new">COMPLAINT FORM</a>
	<a href="#about">ABOUT</a>
	<a href="#contact">CONTACT</a>
  <a href="a_login.php" target="new">ADMIN LOGIN</a>   
</nav>

<div class="logo" id="logo">
	<a href="https://www.nmims.edu/">
		<img src=img/logo.png alt="nmims" style="height: 170px; width: 200px; object-fit: contain; padding: 0px;">
	</a>
</div>

<div class="heading" id="home">
	<p>COMPLAINT DESK</p>
</div><br><br><br><br>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/shirpur4.jpg" style="width:100%">
    <div class="text">NMIMS Shirpur Campus</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/shirpur2.jpg" style="width:100%">
    <div class="text">NMIMS Shirpur Campus</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/shirpur1.jpg" style="width:100%">
    <div class="text">NMIMS Shirpur Campus</div>
  </div>


</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<div class="about" id="about">
	<h2 style="color: #cc0000; text-align: center;">ABOUT</h2>
<div class="aboutp">
	<h3 style="text-align: center;">ABOUT PORTAL</h3>
        <p>
        Here we are a team that are keen to solving the most common problems faced by the students.<br>
	Complaints provide us insights into problems students are facing in their day to day lives in this college.<br><br>
	Currently we are dealing with the hostel based problems such as the complaints of furniture or electrical appliances which require various kinds of services or the missing complaint.<br><br>
	You can register your complaint with us and we will try to resolve your concern as soon as possible! We have a team of carpentors, plumbers, electricians and security guards working with us so as to make it easier to live in this campus!<br>	  	 
        </p>
</div>
<div class="aboutp">
	<h3 style="text-align: center;">ABOUT NMIMS Shirpur</h3>
	<p>
	SVKM's NMIMS Shirpur is an integrated campus approved by All India Council for Technical Education (AICTE), New Delhi. The town in Maharashtra shares borders with Madhya Pradesh and Gujarat states. This makes it well connected by Road and Rail to Mumbai in Maharashtra, Indore in Madhya Pradesh and Vadodara in Gujarat.<br><br>
	In the year 2018, the Mukesh Patel Technology Park, Shirpur, received the "Green Environment Campus" award by ET Now - Making of Developed India Awards.
	</p>
</div> 
</div>

<div class="contact" id="contact">
	<h2 style="color: #cc0000; text-align: center;">CONTACT US</h2>
	<p>
		<i class="fa fa-map-marker" style="font-size:20px;color:red"></i>
		Mukesh Patel Technology Park, Babulde, Bank of Tapi River,Dist. Dhule, Maharashtra, India.
	</p>
	<p>
		<i class="fa fa-phone" style="font-size:20px;color:red"></i>
		02563 – 286545 / 286546 / 286547 / 286548 / 286549 / 286550
	</p>
</div>
<div class="reach id="reach">
	<p>Reach us via
            <a href="mailto:complaintportal@example.com" style="font-style: bold;"><i class="fa fa-envelope"></i></a>
            <a href="https://www.facebook.com/NMIMS.India" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/school/nmims_india/" target="_blank" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
            <a href="https://twitter.com/nmims_india" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/nmims_india/" target="_blank" class="instagram-bg"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/user/nmimsedu" target="_blank" class="youtube-bg"><i class="fa fa-youtube"></i></a>
	</p>
</div>

			

	

	