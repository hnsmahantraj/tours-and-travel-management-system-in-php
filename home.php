<?php
   session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
include("admin/include/connect.php");
   if(isset($_POST['submit']))
   {
      if($_SESSION['loggedin']){
         $email=$_SESSION['username'];
         $message=$_POST['message'];

         $sql="INSERT INTO `tbl_feedback` ( `email`, `message`) VALUES ( '$email', '$message')";
         $result=mysqli_query($con, $sql);
         if($result){
            header("location: home.php");
         }
         else{
            die(mysqli_errno(con));
         }

      }
      
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>welcome! <?php  echo ($_SESSION['username']); ?></title>

   <!-- page ico -->
   <link rel="stylesheet" type="text/css" href="images/gujarat.jpg">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

      <style>
         	.f{
		   background: black;
		   background-size: cover;
		   background-position: center;
		}

		.f .box-container{
		   display: grid;
		   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
		   gap: 3rem;
		}

		.f .box-container .box h3{
		   color:var(--white);
		   font-size: 2.5rem;
		   padding-bottom: 2rem;
		}

		.f .box-container .box a{
		   color:var(--light-white);
		   font-size: 1.5rem;
		   padding-bottom: 1.5rem;
		   display: block;
		}

		.f .box-container .box a i{
		   color:var(--main-color);
		   padding-right: .5rem;
		   transition: .2s linear;
		}

		.f .box-container .box a:hover i{
		   padding-right: 2rem;
		}

		.f .credit{
		   text-align: center;
		   padding-top: 3rem;
		   margin-top: 3rem;
		   border-top: .1rem solid var(--light-white);
		   font-size: 2rem;
		   color:var(--white);
		}

		.f .credit span{
		   color:var(--main-color);
		}
         </style>
</head>
<body>
   
<?php include('includes/header.php') ?>

<!-- home section starts  -->

<!-- <section class="home-slider" style="margin-top:5px; padding-top: 5px; border-radius: 200px;">
    <div class="slider" style="width:80%; height: 500px; border-radius:200px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.7);">

    </div>
    
</section> -->

<section class="home-slider" style="width:100%; height: 500px;object-fit:cover ;border-radius:200px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.7); background: url('images/mfp4lp08_statue-of-unity-twitter-october-2018-_625x300_31_October_18.webp') no-repeat; margin-top:5px ;background-position: cover !important; background-size: cover !important;animation: slide 15s infinite linear; ">
    <div class="slider" >
        
    </div>
</section>
<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our package services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/museum.png" alt="">
         <h3>heritage</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/temple (2).png" alt="">
         <h3>temples</h3>
      </div>

      <div class="box">
         <img src="images/hands-up.png" alt="">
         <h3>fun</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/girnar.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p> <p> Garvi gujarat offers comprehensive and gratifying tour packages to Gujarat. Our tailor-made packages are designed keeping in mind the satisfaction and needs of the every travelers. These packages do not burn a hole in the tourist's pocket and make them explore different hues of this beautiful state that has in bag a perfect tour opportunity to the travelers of different tastes and interests.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<section class="destinations">

<div class="content1">
      <h3 style="font-size:3rem; color:black; text-align:center">top destinations</h3>
      <section class="f">

   <div class="box-container">

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
</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
            <div class="image">
                <h2> <img src="images/Maharaja-Sayajirao-University.jpg" alt=""></h2>
            </div>
            <div class="content">
                <h3>Heritage and culture</h3>
                <p><b>8 nights 9 days</b></p>
                <a href="heritage.php" class="btn">view package</a><br>
                <p style="color:black;"><b>&#x20B9</b> <b>25,000</b></p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

      <div class="box">
            <div class="image">
                <h2><img src="images/istockphoto-930186816-612x612.jpg" alt=""></h2>
            </div>
            <div class="content">
                <h3>Gujarat textiles and market</h3>
                <p><b>10 nights 11 days</b></p>
                <a href="desert.php" class="btn">view package</a><br>
                <p style="color:black;"><b>&#x20B9</b> <b>15,000</b></p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
      
      <div class="box">
           <div class="image">
                <h2> <img src="images/145145-sarangpur.jpg" alt=""></h2>
            </div>
            <div class="content">
                <h3>temple</h3>
                <p><b>6 nights 7 days</b></p>
                <a href="temple.php" class="btn">view package</a><br>
                <p style="color:black;"><b>&#x20B9</b> <b>5,000</b></p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">read more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content" >
      <h3>upto 50% off</h3>
      <p ><b>lets make it now!!</b></p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<section class="booking">

   <h1 class="heading-title" style="margin:0;top:0;">Give feedback</h1>

   <form  method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="email" placeholder="enter your email-id" name="email" value="<?php echo $_SESSION['username'];?>" required>
         </div>
         <div class="inputBox" >
            <span>messege :</span>
            <input type="text" placeholder="enter your messege here" name="message" style="width:100%;" required>
         </div>
         <input type="submit" value="send" class="btn" name="submit" style="color:white; margin-left:425px">
        </div>
    </form>
</section>
<!-- home offer section ends -->

<?php include('includes/footer.php') ?>

</body>
</html>