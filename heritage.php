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
    <h1>Gujarat Heritage tour</h1>
    <h3>8 nights - 9 days</h3>
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
        <p><b><i>Gujarat is a place highly affluent with heritage and culture. Positioned in the western part of India, the state 
            is a vivacious place popular for its immaculate beaches, ancient monuments, mouthwatering cuisines and lively 
            festivals. The famous monumental edifices found in the state incorporate world heritage sites, palaces, forts, 
            mosques, temples and crumbled remains.</p>

            <p>This 08 Nights and 09 Days Gujarat holiday package takes the traveller to the insignias of the rich past of 
            the state. The major destinations covered in this tour are Vadodara, Ahmadabad, Jambughoda, Uthelia, Bhavnagar, 
            Gondal and Wankaner. The major highlights of this trip are sightseeing journey in Jambugodha, journey to Champaner-
            Archaeological Park, visiting Harappan relics, shopping in the local markets of Bhavnagar, excursion to
            Wankhaner- Watson Museum and Rashtriya Shala. The tour takes the traveller to the best of heritage spots in 
            Gujarat replete with monuments symbolizing ancient architectural brilliance.</i></b></p><br><br>
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
                <td><b>Arrival at Vadodara/Ahemdabad</b><br>
                    On arrival at Vadodara/Ahmedabad airport/ railway station, meet our representative who will be there for your
                    welcome and transfer you to your already booked hotel. On arrival, check in at the hotel for an overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Jambughoda Sightseeing</b><br>
                    Today post breakfast in the morning set out for a full day sightseeing tour of Jambughoda and 
                    witness its traditional culture and lifestyle. An overnight stay in the hotel in Jambugodha.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Jambughoda - Uthelia</b><br>
                    We will leave post breakfast in the morning and leave by road for Uthelia via Champaner. It is a 
                    UNESCO World Heritage Site and home to more than hundred architectural edifices. Enjoy an overnight 
                    stay in Uthelia.
                </td>
            </tr>
            <th scope="row">day 4</th>
                <td><b>Uthelia - Bhavnagar</b><br>
                    In the morning post breakfast, we will leave for excursion to Harrappen Era, located at Lothal. Thereafter,
                    we will proceed towards Bhavnagar, a historical town.
                    In the evening, we will visit the Museum and the local markets. Stay overnight in the hotel in Bhavnagar.
                </td>
            </tr>
            <th scope="row">day 5</th>
                <td><b>Bhavnagar</b><br>
                Today early in the morning, we will drive towards Palitana. En-route, we will visit Shetrunjaya Hill, 
                nestled at 2000 feet. The town has around 863 temples with arches, carved pillars and ornamented idols,
                which dates back to the 11th century. Later return back to your hotel in Bhavnagar for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 6</th>
                <td><b>Bhavnagar - Gondal</b><br>
                Post breakfast in the morning, we will hit the road to Gondal. On arrival in Gondal by afternoon 
                check in at the hotel. In the evening, we will visit the Naulakha Palace, which was built in the 
                17th century and known for its stone carvings and exquisite Jarokha balconies. Take pleasure of a 
                relaxing overnight stay in the hotel in Gondal.
                </td>
            </tr>
            <th scope="row">day 7</th>
                <td><b>Gondal - Wankaner</b><br>
                Today post breakfast, we will leave by road for Wanakner. On the way, we will explore the tourist 
                attractions in Rajkot which include Watson Museum and Rashtriya Shala. On arrival in Wanakner by 
                afternoon, we will check in at the pre-booked hotel and leave to explore the Palace Museum and the 
                local village. Later, we will return back to the hotel for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 8</th>
                <td><b>Wankaner - Ahmedabad</b><br>
                Post an early morning breakfast, we will drive to Ahmedabad today. On reaching Ahmedabad check in 
                at the hotel. In the afternoon, we will set off for a half day sightseeing tour of Ahmedabad. Later
                , return back to the hotel in for an overnight stay in Ahmedabad.
                </td>
            </tr>
            <th scope="row">day 9</th>
                <td><b>Departure - Ahmedabad</b><br>
                Today, you will transfer you to the airport to board the flight for onward destination.<br>
                    <br>
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