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
	<link rel="stylesheet" type="text/css" href="Vadodara.css">
</head>	
<body>
<?php require('includes/header.php') ?>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Vadodara</h1>
					<p>Vadodara, a city in Gujarat in India, also known as Baroda, is named for the vad (banyan) trees that flourish in the area. It is known as the cultural capital of Gujarat.</p>

				</div>
				<div class="content">
					<h1>Lakshmi Vilas Palace</h1>
					<p>The Lakshmi Vilas Palace in Vadodara, Gujarat, India, was constructed by the Gaekwad family, a prominent Maratha family, who ruled the Baroda State. Major Charles Mant was credited to be the main architect of the palace.</p>
                        <br>
                        <h1>Kirti mandir </h1>
                        <p>The royal mausoleum of the Gaekwad dynasty, Kirti Mandir, is one of the most stunning but understated buildings in Baroda. Situated in the heart of the city, it was built in honour of Maharaja Sayajirao Gaekwad III's silver jubilee celebration in 1936. The building is E-shaped and features beautiful architectural features like balconies, terraces, tombs, domes and a brilliantly carved 35 metres high central shikhara. The interiors have murals by Nandalal Bose, based on themes like Gangavataran, Life of Meera, the battle of Mahabharat and Natir Poojan and some rare paintings from the famous artist Raja Ravi Varma.
                        </p>
                        <br>
                        <h1>Baps Swaminarayan Mandir vadodara </h1>
                        <p>At a distance of 6 km from Vadodara Railway Junction, BAPS Mandir is a famous temple located in the Atladara locality of Vadodara city. It is one of the popular BAPS Mandirs in Gujarat and among the top Vadodara places to visit.<br>The environment of the temple is very refreshing and peaceful. There are several aartis that are performed on daily basis. Various events take place on weekly basis like bal sabha, Satsang where people enjoy by getting fully indulged in devotion towards god. To keep the Indian culture alive, the temple also celebrates all the Indian festivals throughout the year.
                        </p>
                        <br>
                        <h1>Baroda Museum & Picture Gallery</h1>
                        <p>At a distance of 2 km from Vadodara Railway Station, Baroda Museum is a museum situated inside Sayaji Baug in the city of Vadodara, Gujarat. It is one of the popular museums in Gujarat and among the top Vadodara tourist places.<br>The Baroda Museum was founded by Maharaja Sayajirao Gaekwad III in 1887 and was opened to the public in 1894. Built-in Indo-Saracenic style of architecture, the museum building was designed by Major Mant & R.F. Chisholm on the lines of the Victoria & Albert Museum of London. The famed art gallery is known to have been completed in 1914 but was opened in 1921 as the transfer of special pieces from Europe that were intended to adorn the walls of the gallery were delayed due to the First World War.</p>
                        <br>
                        <h1>EME Temple</h1>
                        <p>Also known as the Dakshinamurthy temple, it primarily houses a massive idol of Lord Shiva, along with a miniature Lord Ganesha.<br>It is unique in its concept and design and its geodesic structure, covered with aluminium sheets, is well regarded by archaeologists</p>





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
				<img src="vadodara.jpeg">
			</div>
		</div>
	</div>

	
</body>
</html>