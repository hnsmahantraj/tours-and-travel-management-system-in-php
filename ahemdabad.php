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
	<link rel="stylesheet" type="text/css" href="ahemdabad.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Ahmedabad</h1>
					<p></p>

				</div>
				<div class="content">
					<h1>Swaminarayan Akshardham (Gandhinagar)</h1>
					<p>Akshardham Temple is located in Gandhinagar, which is situated about 25kms from Ahmedabad. The temple is dedicated to Swaminarayan and is the best example of contemporary architecture and style. Akshardham is considered a place of education, enlightenment and in a way entertainment. More than 2 million people are estimated to visit the temple each year.

                        The major attractions of the temple are its 10-story tall golden idol of Swaminarayan; Mystic India, a film on an incredible journey of an 11-year-old child yogi called Neelkanth; the light and music show called Sat Chit Anand Watershow and audio animatronic shows. It is indeed one of the major tourist attractions in Ahmedabad.</p>
                        <br>
                        <h1>Sidi Saiyyed Mosque</h1>
                        <p>Sidi Saiyyed Mosque is one of the most popular monuments in Ahmedabad. It is situated in the northeast corner of Bhadra Fort and is famed for its latticework over the yellow sandstone. The major highlight of this mosque is the twin jails on the western wall that depicts intertwining of tree branches.</p>
                        <br>
                        <h1>Kankaria Lake</h1>
                        <p> Kankaria Lake is located in the southern part of the city. The lake is the best picnic spot for families and kids. The lakefront has been developed into an entertainment zone as it has features like a zoo, toy train, kids’ city, tethered balloon ride, water rides, Water Park, food stalls, and other entertainment facilities. It is one of the top family and kids friendly tourist destinations in Ahmedabad for a wonderful weekend. Even a week-long festival is celebrated here each year in the last week of December.</p>
                        <br>
                        <h1>Gujarat Science City</h1>
                        <p>This Science City has been developed to foster education with a blend of entertainment for the general mass. It hosts an amazing centre with imaginative and informative yet contemporary exhibitions of labs, working models, interesting activity corners and virtual reality with live demonstrations to provide an understanding of science and technology to the common man.<br>The architecture of Science City is very well designed with each attraction separated into different sections or modules</p>
                        <br>
                        <h1>Sabarmati Ashram</h1>
                        <p>Sabarmati Ashram, formerly known as 'Satyagraha Ashram", situated in Ahmedabad at the Kocharab Bungalow of Jivanlal Desai, a barrister. Later on it was shifted to the banks of Sabarmati river and then it came to be known as 'Sabarmati Ashram'. Gandhi stayed at the Ashram from 1915 to 1933 later on the Ashram was disbanded. The Ashram is a witness to many important historical events.</p>

					 <div class="button" >
						<a href="book.php" class="btn" style="border-radius:30px;">Visit Place</a>
					</div>
				</div>
				
			</div> 
			<div class="image-section">
				<img src="ahemdabad.jpeg">
			</div>
		</div>
	</div>

</body>
</html>