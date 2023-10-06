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
            background: url('images/desert-beach-tour2.webp') no-repeat; 
            background-position: cover !important;
            background-size: cover !important;
            object-fit:cover;
            animation: h-slide 15s infinite linear;
        }
        @keyframes h-slide{
            0%{
                background:url('images/desert-beach-tour3.webp') no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center;
            }
            35%{
            background: url('images/desert-beach-tour1.webp') no-repeat;
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
    <h1>Gujarat Desert and Beach Tour</h1>
    <h3>4 nights - 5 days</h3>
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
        <p><b><i>Counted among the most vivacious and ethnic states in India, Gujarat perfectly blends the 
            modernity with ancient culture and heritage. The state is widely renowned for its barren deserts and 
            sun-kissed beaches. This 04 Nights and 05 Days itinerary take the tourists on a congenial and 
            unforgettable desert beach tour of Gujarat. The destinations covered in the tour are Ahmadabad, 
            Wankaner, Mandvi, Bhuj and Rann of Kutch.

            The major highlights of the trip are relaxing on the beautiful beaches of Mandvi, visiting the royal 
            palace of the former king of Wankaner- Ranjit Vilas Palace, offering the prayers in the exquisite mazaar
             of Mazar-e-Noorani, carrying out desert safari in the biggest salt marsh of the world- Rann of Kutch 
             and a visit to Swaminarayan Temple. The tour is ideal for getting soaked in the surreal beauty and 
             tranquility of deserts and beaches of Gujarat.</i></b></p><br><br>
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
                <td><b>Ahmedabad - Wankaner</b><br>
                On arrival at Ahmedabad Airport/ Railway Station, meet our tour executive who will take you to
                 Wankaner, which is around four hour drive. On reaching Wankaner, check in at your already booked 
                 the hotel and relax for a while. Wankaner was an 11-Gun Salute State during the British era, and 
                 today it's renowned for its royal palaces. In the evening, you can visit some of this city's 
                 attractions such as Ranjit Vilas Palace (official residence of the maharaja of Wankaner), Ceramic 
                 Zone (an industrial zone that worked as a boon for the economy and employment in the state), 
                 Hazrat Shah Bava Dargah Sharif (a sacred shrine of high significance for Muslims as well as Hindus)
                 , etc. Enjoy an overnight stay in the hotel in Wankaner.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Wakaner - Mandvi</b><br>
                After breakfast in the morning, get ready to visit Mandvi. It is about 4-hour long drive,. On 
                reaching, check in at the hotel in Mandvi and relax for some time. Later, you can opt to behold the
                 view of sunset in its magnificent beaches or visit some of the major attractions here such as 
                 Vijay Vilas Palace (a heritage site that reflects grandiose and brilliance of Rajput architecture)
                 , Navjivan Nature Cure Centre (a heaven meant for rejuvenation, relaxation and medical treatment) 
                 and Mazar-e-Noorani (a beautiful white mazar having a tranquil ambience). In the evening, return 
                 back to the hotel for an overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Mandvi - Bhuj</b><br>
                Today, we will visit one of the popular cities of Gujarat, Bhuj. On reaching, check in at a hotel and relax for
                 a while. Therafter, we will proceed for the sightseeing tour of Bhuj. This city is famed for its culture, 
                 wildlife and architectural marvels. Swaminarayan temple is one of its prime attractions; the temple complex is 
                 dedicated to Narnarayan Deva and Harikrishna Maharaj. Other locations that can be visited are Kutch Museum, 
                 Prag Mahal, Aina Mahal,and Cenotaphs Complex. In the evening, return to the hotel and enjoy an overnight stay.
                </td>
            </tr>
            <th scope="row">day 4</th>
                <td><b>Bhuj - Rann of Kutch - Bhuj</b><br>
                    In the morning after breakfast, we will leave to explore the white desert. Rann of Kutch is a 
                    salt marsh located in the Thar Desert. Relax in your room and enjoy the view of the surroundings.
                     In the evening, be ready for an enthralling desert safari that gives you a chance to behold the 
                     sight of animals like wild-ass, desert fox, blackbuck, wolf, jackal etc. Stay overnight in hotel.
                </td>
            </tr>
            
            <th scope="row">day 5</th>
                <td><b>Bhuj - Ahmedabad</b><br>
                After breakfast in the morning, check out from the hotel and get timely transfer to Ahmedabad Airport/ Railway 
                Station to board the flight or train to your onward destination.<br>
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