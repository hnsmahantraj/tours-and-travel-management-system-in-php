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
            background: url('images/download (4).jfif') no-repeat; 
            background-position: cover !important;
            background-size: cover !important;
            object-fit:cover;
            animation: h-slide 20s infinite linear;
        }
        @keyframes h-slide{
            0%{
                background:url('images/asiatic-lioness-and-cubs-in-gir-m.png') no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center;
            }
            35%{
            background: url('images/wildlife-safari-in-gujarat2.webp') no-repeat;
            background-size: cover;
            object-fit: cover;
            background-position: center;
            }
            75%{
            background:url('images/wildlife-safari-in-gujarat1.webp') no-repeat;
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
    <h1>Wildlife Safari</h1>
    <h3>6 nights - 7 days</h3>
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
        <p><b><i>Gujarat is no less than an empyrean for the wildlife enthusiasts. Deciduous woods, desert plains, 
            meadows, wetlands and shoreline locations make Gujarat a perfect and pleasant place for wildlife buffs.
             Gir National Park is the only place in India where the tourists can experience the jaw-dropping sight 
             of Asiatic Lions. This 06 Nights and 07 Days itinerary is a complete and congenial tour to explore the 
             rich wildlife of Gir National Park and other nearby sightseeing places. The major destinations covered 
             in this tour are Ahmadabad, Dasada, Gir National Park and Sayla.

            The attractive highlights of the trip are exploration of Rann of Kutch, which is the only place to find 
            Asiatic Wild Ass, witnessing sunset and bird watching at Bajana Lake, visiting the Somnath Temple, 
            carrying out wildlife safari in Gir National Park and early morning bird watching at Nalsarovar Bird 
            Sanctuary. The tour is perfect for all the lovers of wilderness to savour sights of flora and fauna in 
            the midst of utter tranquility.</i></b></p><br><br>
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
                <td><b>Ahmedabad - Dasada (90 kms)</b><br>
                After your arrival in Ahmedabad, we will drive to Dasada. Enjoy
                 evening safari in the Little Rann of Kutch. This desert wildlife
                  sanctuary is popular for being home to Asiatic wild ass, which is 
                  found nowhere else in India. Take pleasure of the mesmerizing 
                  sunset and bird watching at Bajana Lake. An overnight stay at 
                  Dasada.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Dasada - Gir National Park</b><br>
                Today early in the morning explore the wildlife by enjoying a 
                Jungle safari in the Little Rann. Thereafter, we will continue
                 to Gir National Park. On arrival, check-in at a forest lodge 
                 and enjoy an overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Jungle Safari at Gir National Park</b><br>
                Enjoy wildlife safari in the Gir National Park in 
                the morning as well as evening. Later return back 
                to your lodge to enjoy dinner followed by an 
                overnight stay.
                </td>
            </tr>            
            <th scope="row">day 4 <br> day 5</th>
                <td><b>Wildlife Safari at Gir National Park & Nearby Sightseeing</b><br>
                The next two days are fixed for morning and evening safaris into 
                the park. You can spot the big cats and other exotic animal 
                species in the park while enjoying safaris. Also, you can 
                visit Devaliya, a special area for the lions. Enjoy nature 
                walk or bird watching in the Gir National Park. You can also 
                opt for a visit to extremely popular the Somnath temple, 
                Ahilya temple and Sun temple, etc. Enjoy dinner followed by 
                an overnight stay at the lodge.
                </td>
            </tr>
            <tr>
                <th scope="row">day 6</th>
                <td><b>Sayla</b><br>
                After breakfast, we will proceed to Sayla. On arrival,
                 check-in at the hotel and relax for some time. Later, we 
                 will drive to a place where you can spot huge flock of 
                 blackbuck antelope. An overnight stay in a heritage hotel 
                 in Sayla.
                </td>
            </tr> 
            <tr>
                <th scope="row">day 7</th>
                <td><b>Sayla - Ahmedabad</b><br>
                Today, we will enjoy an early morning visit to Nalsarovar 
                Bird Sanctuary for bird watching. (NOTE: Boat ride is subjected 
                to weather conditions). Later, we will drive back to the 
                Ahmedabad airport to catch a flight for onward destination.<br><br>
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