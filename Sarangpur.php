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
	<link rel="stylesheet" type="text/css" href="Sarangpur.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Sarangpur</h1>
					

				</div>
				<div class="content">
					<h3>BAPS Shri Swaminarayan Mandir</h3>
					<p>Sarangpur is a village in the Botad District in the state of Gujarat, India, and its name is also often pronounced, 'Salangpur'. Sarangpur is known throughout India for the historic Shri Kashtabhanjan Hanumanji temple and BAPS Swaminarayan temple located in the village.
                    <br> Sarangpur is also known for its BAPS Shri Swaminarayan Shikharbaddha mandir, built in 1916 by Shastri Yagnapurushdas which is the second highest temple in Gujarat at exactly 108 feet.</p>
                    <h3>Shree Kashtabhanjan Dev Hanumanji Mandir</h3>
                        <p>Shri Hanuman Mandir, Sarangpur is a Hindu temple located in Sarangpur, Gujarat and comes under the Vadtal Gadi of the Swaminarayan Sampraday. It is the only Swaminarayan Temple which does not have the Murtis of either Swaminarayan or Krishna as the primary deity of worship. It is dedicated to Hanuman in the form of Kastbhanjan .</p>
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
				<img src="sarangpur.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>