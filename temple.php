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
        .desc p{
            word-spacing:10px;
        }
        .h-slide{
            width:80%;
            height: 500px; 
            margin-left:150px;
            border-radius:100px; 
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.7); 
            background: url('images/classical-gujarat-heritage3.webp') no-repeat; 
            background-position: cover !important;
            background-size: cover !important;
            object-fit:cover;
            animation: h-slide 20s infinite linear;
        }
        @keyframes h-slide{
            0%{
                background:url('images/best-of-gujarat1.webp') no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center;
            }
            35%{
            background: url('images/2016_02_24_001_Sarangpur_f.jpg') no-repeat;
            background-size: cover;
            object-fit: cover;
            background-position: center;
            }
            75%{
            background:url('images/best-of-gujarat2.webp') no-repeat;
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
    <h1>Gujarat temple tour</h1>
    <h3>3 nights - 4 days</h3>
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
        <p><b><i>One of the most consecrated destinations in India, Gujarat is the land of Lord Krishna. This 
            sacred place abodes oodles of holy temples that allow the devotees to get drenched in the spirituality 
            in the midst of utter serenity. The sacredness of this place can be traced from the times of Mahabharata.
            This 04 Nights and 05 Days itinerary take the tourists to a comprehensive and pleasant tour to most famous
            temples of Gujarat.

            The destinations included in this itinerary are Rajkot, Dwaraka, Porbandar, Veraval and Somnath. Some 
            of the major highlights of the trip are visiting Dwarakadhish Temple, Kirti Mandir- the home of Mahatma 
            Gandhi in Porbandar and visiting the Somnath Temple, which is among the twelve most holy shrines-
            Jyotirlinga, dedicated to Lord Shiva. The tour is perfect for the tourists who are spiritual at heart 
            and want to unravel the peacefulness of Gujarat.</i></b></p><br><br>
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
                <td><b>Rajkot - Dwaraka</b><br>
                On arrival at the Rajkot airport in the morning, meet our representative who will take you to 
                Dwaraka. In the evening, you will arrive in Dwaraka and check in at your already booked hotel. 
                Later, we will leave to visit the temple and take part in the evening Aarti. An overnight stay in
                the hotel.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Dwaraka - Porbandar</b><br>
                In the morning after breakfast, we will visit the Dwarkadhish temple. After visiting the temple, 
                we will drive to Porbandar. Porbandar is a picturesque old sea port situated on the western coast 
                of Gujarat. It was the birth place of Mahatma Gandhi. Enjoy an overnight stay in the hotel in 
                Porbander.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Veraval - Somnath</b><br>
                In the morning, we will drive further to visit the legendary shore temple of Somnath. This temple is
                 one of the twelve most sacred shrines dedicated to the Lord Shiva and a Jyotirlinga. Later, return 
                 back to the hotel in Somnath for an overnight stay.
                </td>
            </tr>            
            <th scope="row">day 4</th>
                <td><b>Somnath - Rajkot</b><br>
                Today, we will drive to the Rajkot airport to board the flight for the onwards journey.<br><br>
                <b>Tour & services Ends.</b>
                </td>
            </tr>
            
        </tbody>
    </table><br>
    <a href="book.php"><input type="submit" value="book now" class="btn" name="submit" style="position:sticky;"></a>
    <a href="package.php"><input type="submit" value="Read more" class="btn" name="submit"></a><br><br><bR>
    <?php require 'includes/footer.php' ?>
</body>
</html>