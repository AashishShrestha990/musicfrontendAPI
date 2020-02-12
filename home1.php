<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>	
	<script src="jquery.js"></script>
<link type="text/css" rel="stylesheet" href="style.css"/>	
		
	<div class="main">
		 <div class="header">
		    <div class="logo">
				<a href="home1.php"><img src="image/logo.png" alt="pic2" height=140 /></a>
		    </div>
			
			
			<div class="loginbar">
			  <?PHP
		        session_start();
		        if(isset($_SESSION['acc'])){
		            include('headerlogged.php');
		        }
		        else{
		            include('header.php');
		        }


		        ?>
			</div>
				
			
		   <div class="navbarOutside">
			   <div class="navbar">	
			     <ul>
					<li><a class="active" href="home1.php" tabindex="1">HOME</a></li>
					<li><a href="forum.php" tabindex="2">COMMUNITY FORUM</a></li>
					<li><a href="booking.php" tabindex="3">BOOKING</a></li>
					<li><a href="home1.php#aboutus" tabindex="4">ABOUT US</a></li>
					
				 </ul>
			   </div>
			</div>
		  </div> 

		  
		<div class="MainContent">
			<div id="outer">
			<div class="slideshow-container">

				<div class="mySlides fade">
				  <img src="slide_image/pic1.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="slide_image/pic2.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="slide_image/pic3.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="slide_image/pic4.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="slide_image/pic5.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="slide_image/pic6.jpg" style="width:100%">
				</div>

				<br/>

				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				  <span class="dot" onclick="currentSlide(4)"></span> 
				  <span class="dot" onclick="currentSlide(5)"></span> 
				  <span class="dot" onclick="currentSlide(6)"></span> 
				</div>
			</div>
		</div>
			<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
			      dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
			</script>


			<div id="visitor">
				<h3 align="center">VISITOR COUNTER</h3>
				<div id="count">
					<?php
					include('counter.php');
					?>
				</div>
			</div>
			        

			<div id="about">

			<h1 align="center">ABOUT</h1>
			<hr style="border:1.5px solid;" width="70%">


				  <h1 id="aboutus" align="center">SPENCER Animal Shelter</h1>
				<h4 align="center">Our Mission</h4>
				<p>At the Spencer Animal Shelter, we believe all animals are deserving of life, respect and care. Our goal is zero-population-growth through spay/neuter programs and services that focus on education, medical care, fostering and adoption. Spencer Animal Shelter is a non-profit organization. The shelter takes in homeless, abused, and abandoned animals in the city of Spencer. We provide shelter, medical care, and spay/neuter to every animal that comes through our doors. In operation for nearly a decade, the shelter has helped provide care and find loving homes for lots of animals.</p>

				<p>
					 </p>
					 <h2 align="center">Our Location<br/>
					 <a href="https://www.google.com/maps/place/Dillibazar+Pipalko+Bot+Bus+Stop/@27.7050245,85.3301093,17z/data=!4m5!3m4!1s0x39eb19a0b2ab6001:0x7c45d39593c03098!8m2!3d27.7049619!4d85.3291342"><img src="image/map.png"></a></h2>
			 

			</div>

		</div>
		
	  </div>
	 
	  <div class="footer">
		<p>
			Address:Dilibazaar, Kathmandu <br/>
			Phone:+977 981868194<br/>
			Email : SAS@gmail.com
		</p>
		<p>
			<span class="vMiddle">Follow us at:</span>
			<a href="https://www.facebook.com" tabindex="8"><img src="image/facebook.png" alt="fb" height=30 /></a>
			<a href="https://www.instagram.com" tabindex="9"><img src="image/instagram.png" alt="in" height=30 /></a>
			<a href="https://plus.google.com" tabindex="10"><img src="image/gp.png" alt="gp" height=30 /></a>
			<a href="https://www.youtube.com" tabindex="11"><img src="image/youtub.png" alt="yt" height=30 /></a>
			<a href="https://www.twitter.com" tabindex="12"><img src="image/twitter.png" alt="tw" height=30 /></a>
			<a href="rss.php" tabindex="13"><img src="image/rss-icon.png" alt="rss" height=30 /></a>
			
		</p>
		<p>© Copyright 2018 SAS.</p>
	  </div>
	



	