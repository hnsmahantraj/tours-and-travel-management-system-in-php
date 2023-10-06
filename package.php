<?php
   session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php require('includes/header.php') ?>

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/sabarmati.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & heritage tour</h3>
            <p>8 nights - 9 days</p>
            <a href="adventure.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>25,000</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/science city.jpg" alt="">
         </div>
         <div class="content">
            <h3>best of gujarat</h3>
            <p>2 nights - 3 days</p>
            <a href="bestofgujarat.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>21,000</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/kutch.avif" alt="">
         </div>
         <div class="content">
            <h3>Desert Beach Tour</h3>
            <p>6 nights - 7 days</p>
            <a href="beach.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>15,500</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      
      <div class="box">
         <div class="image">
            <img src="images/lothal.jpg" alt="">
         </div>
         <div class="content">
            <h3>heritage tour</h3>
            <p>8 nights - 9 days</p>
            <a href="heritage.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>8,000</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/145145-sarangpur.jpg" alt="">
         </div>
         <div class="content">
            <h3>gujarat temple tour</h3>
            <p>3 nights - 4 days</p>
            <a href="temple.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>12,000</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/girlion.jpg" alt="">
         </div>
         <div class="content">
            <h3>wildlife safari</h3>
            <p>3 nights - 4 days</p>
            <a href="wildlife.php" class="btn">view package</a><br>
            <p style="color:black;"><b>&#x20B9</b> <b>10,000</b></p>
            <a href="book.php" class="btn">book now</a>
            
         </div>
      </div>
   </div>
</section>

<!-- packages section ends -->
<section class="destinations" style="width: 100%">

<div class="content1">
      <h3 style="font-size:3rem; color:black; text-align:center">people also like to visit</h3>
      <section class="f">

   <div class="box-container" style="background-color:black; color:black;" >

      <div class="box">
         <h3>top cities</h3>
         <a href="ahemdabad.php"> <i class="fas fa-angle-right"></i> ahemdabad</a>
         <a href="Vadodara.php"> <i class="fas fa-angle-right"></i> Vadodra</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Surat</a>
      </div>

      <div class="box">
         <h3>most visited places</h3>
         <a href="Gir.php"> <i class="fas fa-angle-right"></i> Gir national park</a>
         <a href="Dumas.php"> <i class="fas fa-angle-right"></i> Dumas</a>
         <a href="Saputara.php"> <i class="fas fa-angle-right"></i> Saputara </a>
      </div>
     
      <div class="box">
         <h3>other places</h3>
         <a href="Sarangpur.php"> <i class="fas fa-angle-right"></i>Sarangpur </a>
         <a href="statue_unity.php" > <i class="fas fa-angle-right"></i> Statue of unity </a>
         <a href="Amazia.php"> <i class="fas fa-angle-right"></i> Amazia amusement park </a>        
      </div>

      

   </div>
</section><br><br>

<?php require('includes/footer.php'); ?>

</body>
</html>