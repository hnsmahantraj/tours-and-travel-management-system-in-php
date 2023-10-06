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
	<link rel="stylesheet" type="text/css" href="Dumas.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Dumas Beach</h1>
					

				</div>
				<div class="content">
					
					<p>Dumas Beach is a rural beach along the Arabian Sea, located 21 kilometres (13 mi) southwest of the city of Surat in the Indian state of Gujarat.[1] It is a popular tourist destination in South Gujarat. Dumas Beach is justly famous for being in the top 35 haunted spots in India.[2][3]

                        Dumas beach is known for its black sand and is considered to be haunted because it was once used as a Hindu burial site, according to folklore..</p>
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
				<img src="dumas.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>