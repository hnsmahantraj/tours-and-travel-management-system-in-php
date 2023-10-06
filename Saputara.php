<?php
   session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
?>

<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Saputara.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h2>Saputara Hill Station</h2>
					

				</div>
				<div class="content">
					
					<p>Saputara is a hilly town located in the Dang district of Gujarat. What is interesting about Saputara is that it is just 6 hours away from Mumbai but 8 hours away from Ahmedabad because of its location right across the border from Maharashtra.
                        <br>Table Point is located on a hill top in Saputara. It is a flat surface on the top of the hill and basically resembles a table top, that’s why the name.<br><br>One of the most popular places to visit is the Saputara Lake which makes up the heart of the city.

                        Tourists come here in large numbers for boating (both pedal and row boating) and other recreational activities such as couple bicycling and kid biking. </p>
						<div class="button" >
						<a href="book.php" class="btn" style="border-radius:30px;">Visit Place</a>
					</div>
				</div>
				<div class="social">
					<!-- <a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a> -->
				</div> 
			</div> 
			<div class="image-section">
				<img src="Saputara.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>