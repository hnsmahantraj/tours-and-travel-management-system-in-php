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
	<link rel="stylesheet" type="text/css" href="Amazia.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h3>Amaazia Water Park,Surat</h3>
				

				</div>
				<div class="content">
					
					<p>Amaazia is one of the best water parks in Gujarat with a splash water park, water rides, a water resort and many more.<br>Spend an exciting day at the Amaazia Waterpark in Surat and take part in its various exhilarating rides.

                        Explore the 3 distinct sections of the waterpark as per the visitor's age, height & weight: Thrill Rides, Fun Rides & Kids Section.<br>
                        
                        Engage in an array of exhilarating water rides, including Forest Jump, Wild Raft, Tribal Twist, Jungle Boat, Twister, King Cobra & Kamikaze.<br>
                        
                        Unwind and spend some undivided quality time with your family & loved ones while enjoying the exciting activities.</p>

                    


                        
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
				<img src="amazia.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>