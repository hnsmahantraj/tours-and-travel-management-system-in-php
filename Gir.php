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
	<link rel="stylesheet" type="text/css" href="Gir.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h2>Gir National Park</h2>
					<p></p>

				</div>
				<div class="content">
					
					<p>Gir National Park is the only place in the world outside Africa where a lion can be seen in 
						its natural habitat. The lions of Gir are a majestic animal, averaging 2.75 metres in length,
					 and with a bigger tail tassle, bushier elbow tufs and prominent belly folds than his African 
					 cousin which has larger mane. Gir is a home to 40 species of mammals and 425 species of birds.</p>
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
				<img src="gir.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>