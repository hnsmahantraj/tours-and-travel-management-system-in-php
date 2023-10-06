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
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php require('includes/header.php') ?>

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/img-12.jpg" alt="" height="550px">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p >Aavo Padharo, words of welcome in the language of Gujarat because it is here that these words ring truly and the guest is 'God' and the people of Gujarat are gregariously friendly, inviting and will entice you to come again and again.

Stretches out into the Arabian Sea, with a hint of the desert and with a coastline of 1600 kms long is Gujarat – the home state of Mahatma Gandhi, the Father of Nation. It is renowned for its beaches, temple towns and historic capitals. Wildlife sanctuaries, hill resorts and natural grandeur are gifts of Gujarat. Sculpture, handicrafts, arts, festivals also make the state rich. Gujarat is also among the most technologically advanced, housing the largest petrochemical complex in the country.

Gujarat has always been a major centre for the Jains and some of its most interesting locations are the Jain Temple centres at Palitana and Girnar Hills. Besides the Jain temples, the state’s major attractions include the only habitat of the Asiatic Lions in India (Gir Forests), a desert ride at the Wild Ass Sanctuary and the beautiful Indo-Saracenic Architecture of Ahmedabad. The colourful tribal villages of Kutch make a visit unforgettable.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         
      </div>
   </div>

</section>


<!-- about section ends -->
<?php require 'includes/footer.php'; ?>
</body>
</html>