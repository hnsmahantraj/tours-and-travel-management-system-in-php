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
    <title>heritage</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            font-size:4rem;
            text-align:center;
            color: #8e448e;
            margin:10px;
            text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
        }
        h3{
            font-size:2rem;
            text-align:center;
            color: gray;
            margin:20px;
            text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
        }
        .desc{
            font-size:1.8rem;
            text-align:center;
            width:100%;
            color:white;
            background:gray;
        }
        .h-slide{
            width:80%;
            height: 500px; 
            margin-left:150px;
            border-radius:100px; 
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.7); 
            background: url('images/lothal.jpg') no-repeat; 
            background-position: cover !important;
            background-size: cover !important;
            object-fit:cover;
            animation: h-slide 15s infinite linear;
        }
        @keyframes h-slide{
            0%{
                background:url('images/2141_adalaj_ste_7733.jpg') no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center;
            }
            35%{
            background: url('images/classical-gujarat-heritage2.webp') no-repeat;
            background-size: cover;
            object-fit: cover;
            background-position: center;
            }
            75%{
            background:url('images/classical-gujarat-heritage3.webp') no-repeat;
            background-size: cover;
            object-fit: cover;
            background-position: center;
            }
        }
        .btn{
           margin-left:650px;
        }
        .bookbtn{
            float:right;
            background:none;
            font-size:2rem;
            position: -webkit-sticky; /* Safari */
            position: sticky;
            /* background:#8e44ad; */
            bottom: 0;
        }
        table{
            width:80%;
            align-content:center;
            margin-left:150px;
        }
        .table th, tr, td{
            font-size:1.5rem;
            padding:5px;
            /* border:1px solid gray; */
            border-right:2px solid #8e44ad;
            box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        }
        .table, th{
            border-top:1px gray;
        }
        .table, tr{
            border-left:2px solid gray;
        }
    </style>
</head>
<body>
    <?php require 'includes/header.php' ?>
    <h1>Best of Gujarat </h1>
    <h3>5 nights - 6 days</h3>
            <section class="h-slide">
                <div class="slide">

                </div>
            </section><br>
            <section class="bookbtn">
                <a href="book.php" class="btn">book now</a>
    </section>
            <h1>Inclusions</h1>
    <table class="inc">
        <th>
            <section class="services">
                <div class="box-container">
                <div class="box" style="height:180px">
                    <img src="images/car (1).png" alt="">
                    <h3>transfers</h3>
                </div>
            </section>
        </th>
        <th>
            <section class="services">
                <div class="box-container">
                <div class="box" style="height:180px">
                    <img src="images/accomodation.png" alt="">
                    <h3>accomodation</h3>
                </div>
            </section>
        </th>
        <th>
            <section class="services">
                <div class="box-container">
                <div class="box" style="height:180px">
                    <img src="images/food.png" alt="">
                    <h3>meals</h3>
                </div>
            </section>
        </th>
        <th>
            <section class="services">
                <div class="box-container">
                <div class="box" style="height:180px">
                    <img src="images/binocular (1).png" alt="">
                    <h3>sight seeing</h3>
                </div>
            </section>
        </th>
    </table>
    <section class="desc">
        <p><b><i>Gujarat is certainly a place like no other when it comes to attracting throngs of tourists with 
            its natural exquisiteness along with wonders of history, culture and architectural brilliance. It is a 
            destination that should not be missed by an aficionado of culture and art. This 05 Nights and 06 Days 
            itinerary is a perfect tour for savouring the best of Gujarat's tourist destinations. The destinations 
            covered in the tour are Ahmedabad, Rajkot, Somnath, Porbander, Dwarka and Jamnagar. The major highlights
             of this trip are sightseeing tour of Ahmedabad consisting Akshardham Temple, Gandhi Ashram and Calico 
             Museum, Darshan at Virpur Temple, Darshan at Somnath Temple, Exploring Porbander, which is the hometown
              of Mahatma Gsandhi, and the journey to the legendary Dwarikadheesh Temple. The tour incorporates 
              visiting the engrossing architectural feasts, ancient places and consecrated pilgrimage destinations.
            </i></b></p><br><br>
    </section>
    <h1 style="text-align:center; margin:10px;">Itinerary</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no. of days</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">day 1</th>
                <td><b>Ahmedabad</b><br>
                On arrival at the Ahmedabad Airport, meet our representative who will transfer you to your already 
                booked hotel. In the afternoon, leave from the hotel to explore the major attractions of Gujarat 
                including Calico Museum, Akshardham Temple, Gandhi Ashram and Adalaj Stepwell in Gandhinagar. Later 
                return back to the hotel for an overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Ahmedabad – Rajkot (220 Kms/5 Hours Drive)</b><br>
                    In the morning post breakfast, we will take a road journey to Rajkot. On the way, we will stop 
                    at Virpur Temple for worship. On arrival in Rajkot by evening, check in the hotel for a relaxing
                    overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Rajkot – Somnath (189 Kms/ 5 Hours Drive)</b><br>
                After breakfast in the morning, we will drive from Rajkot to Somnath. On arrival, check in at the 
                hotel. In the evening, we will visit the Somnath temple. Enjoy an overnight stay in the hotel in 
                Somnath.
                </td>
            </tr>
            <th scope="row">day 4</th>
                <td><b>Somnath – Dwarka ( 230 kms / 5 Hours Drive)</b><br>
                In the morning after breakfast, we will hit the road to Dwarka. En-route, we will halt in Porbandar
                 and explore the surrounding attractions. On arrival in Dwarka by evening, check into the hotel and 
                 take pleasure of an overnight stay.
                </td>
            </tr>
            <th scope="row">day 5</th>
                <td><b>Dwarka</b><br>
                The day is booked for the sightseeing tour of Dwarka. We will leave in the morning after breakfast to
                 explore Dwarka and its surrounding areas. Later return back to the hotel for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 6</th>
                <td><b>Dwarka – Jamnagar airport</b><br>
                Today, we will transfer you to the Jamnagar Airport to board the flight for onward destination.<br><br>
                <b>Tour & services Ends.</b>
                </td>
            </tr>
            
        </tbody>
    </table><br>
    <a href="book.php"><input type="submit" value="book now" class="btn" name="submit"></a>
    <a href="package.php"><input type="submit" value="Read more" class="btn" name="submit"></a><br><br><bR>
    <?php require 'includes/footer.php' ?>
</body>
</html>