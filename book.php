<?php
   session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
?>
<?php 
	include 'admin/include/connect.php';
    // gid	tg_name	tg_mobile	tg_address	tg_email	tg_password
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
      $name=$_SESSION['name'];
		$phone=$_POST['phone'];
      $address=$_POST['address'];
		$email=$_POST['email'];
		$place=$_POST['place'];
      $person=$_POST['person'];
      $arrivals=$_POST['arrivals'];
      $departures=$_POST['departures'];
      $mot=$_POST['mot'];

   

      $sql="insert into `tbl_bookings` ( `name`, `phone`, `email`, `address`, `place`, `person`, `arrivals`, `departures`, `mot`) values('$name','$phone','$email','$address','$place', '$person', '$arrivals', '$departures', '$mot')";
		$result=mysqli_query($con,$sql);
      
		if($result)
		{
			// echo "booking done successfully";
			header('location: book_form.php');
		}
		else{
			die(mysqli_errno($con));
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
         @media print {
            header,footer,nav *{
               display:none;
               visibility:none;
            }

            .btn-link{
               display:none;
               visibility:none;
            }

            body *{
               size:landscape;
            }

            #print_btn{
               display:none;
               visibility:hidden;
            }
         }
   </style>   
</head>
<body>
   <?php require('includes/header.php') ?>

<!-- <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div> -->

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title" style="margin:0;top:0;">inquiry form</h1>

   <form  method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="place" required>
         </div>
         <div class="inputBox">
            <span>number of person:</span>
            <input type="number" placeholder="number of person" name="person" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" id="txtDate" >
            
         </div>
         <div class="inputBox">
            <span>depatrures :</span>
            <input type="date" name="departures" id="txtDate1">
         </div>

         <div class="inputBox">
            <span>mode of transportations :</span>
            <select name="mot" for="mot" style="width:100%; border:1px solid black;padding:1.2rem 1.4rem;font-size: 1.6rem;color:var(--light-black);text-transform: none;margin-top: 1.5rem;">
               <option value="--select--">--select--</option>
               <option value="train">train</option>
               <option value="bus">bus</option>
               <option value="cab">cab</option>
            </select>
         </div>
      </div>
            <input type="submit" value="submit" class="btn" name="submit">
      <!-- <button type="submit" value="submit" class="btn" name="submit" onclick="window.print();" id="print_btn">Submit</button> -->

   </form>

</section>

<!-- booking section ends -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script>   
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('min', minDate);
});
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#txtDate1').attr('min', minDate);
});
</script>
<?php require('includes/footer.php'); ?>

</body>
</html>