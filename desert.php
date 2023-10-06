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
            background: url('images/10-days-gujarat-textile-tour.jpg') no-repeat; 
            background-position: cover !important;
            background-size: cover !important;
            object-fit:cover;
            animation: h-slide 15s infinite linear;
        }
        @keyframes h-slide{
            0%{
                background:url('images/Installation_view_of_The_Fabric_of_India_at_the_VA_c_Victoria_and_Albert_Museum_London_6.png') no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center;
            }
            35%{
            background: url('images/istockphoto-930186816-612x612.jpg') no-repeat;
            background-size: cover;
            object-fit: cover;
            background-position: center;
            }
            75%{
            background:url('images/il_570xN.1660185012_foha.webp') no-repeat;
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
    <h1>Gujarat textiles and handicrafts</h1>
    <h3>10 nights - 11 days</h3>
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
        <p><b><i>Gujarat is highly profuse with affluent and vivacious tradition of making textile items and 
            handicrafts. From the ancestors to the generations, this tradition has been going on and blessing the 
            state with fine epitomes of artistic brilliance. These handicrafts vary in terms of proportions, 
            patterns and material. These crafts are unmatched blend of intricate detailing and aesthetic charm. 
            Some of the major textile and handicraft designs of Gujarat include Zari, pottery, Patola, Bandhani, 
            beadwork, woodwork and silver jewellery.

            This 10 nights and 11 days itinerary is a perfect tour to explore textile and handicrafts of Gujarat.
             The major destinations en route are Ahmadabad, Gondal, Junagarh, Gir, Jamnagar, Kutch, Dasada and Patan.
              The major highlights of this tour are journey to the local villages, excursion Sayla, which is famous
               for weaving and beadwork, visiting the Naulakha Palace, which is famous for its collection of beadwork,
                brass utensils, silverware and hand painted wooden toys, enjoying a safari in Gir, guided tour to 
                Patan and guided tour to Anjar, which is famous for textile and metal handicraft industry. The tour is 
                ideal to pick for those who are connoisseurs of textile and handicrafts.</i></b></p><br><br>
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
                On arrival at the Ahmedabad airport / station, meet our tour
                 representative who will be there for your welcome. After 
                 a warm welcome, our representative will transfer you to 
                 your already booked hotel. Check-in at the hotel, rest 
                 for some time in your comfortable hotel room and then get 
                 ready for visiting the Calico Museum of Textiles and 
                 various others displaying handicraft items. Here you can 
                 witness the wide range of rich handicraft items of Gujrat 
                 that are famous worldwide. Later, return back to the 
                 hotel for an overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 2</th>
                <td><b>Ahmedabad - Palaces Of Gondal</b><br>
                    In the morning after breakfast, we will start our day with a road trip to Sayla. On arrival in Sayla, enjoy a delicious lunch at a textile hotel and thereafter we will visit the nearby village to see how local villagers do weaving and beadwork and come up with beautiful handicraft items that are worth buying. Later, we will drive to Gondal, famous for its cottage, jewellery, beadwork and Brassware industries to add on to your overall experience and see some other unique handicraft items that reflects our rich culture and tradition. Thereafter, we will visit the Naulakha Palace, famous for its exquisite collection of brass utensils, beadwork, silverware and hand-painted wooden toys. Here, one can witness an extensive range of textile and handicrafts that are handmade and looks very appealing. After exploring these places, we will return back to the hotel in Gondal for a relaxing overnight stay.
                </td>
            </tr>
            <tr>
                <th scope="row">day 3</th>
                <td><b>Gondal - Jetpur - Junagadh - Gir</b><br>
                After breakfast in the morning, we will leave for a road trip to Gir via Jetpur, which is known for its block printing, screen printing and textile units. En-route, we will visit the famous Junagadh museum that is famous for its Nawabi textiles and beautiful carpets. On reaching our destination i.e. Gir, we will check in at the hotel for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 4</th>
                <td><b>Gir - Jamnagar</b><br>
                Today after breakfast in the morning, we will leave from by road for Gir Wildlife Sanctuary and National Park. Gir Wildlife Sanctuary is one of the famous wildlife sanctuaries of India that grab attention of wildlife lovers from around the world. It is also known as the abode of the Asiatic Lions. After exploring the natural beauty and wilderness of Gir, we will head towards Jamnagar, which is known for its Bandhini work. On arrival in Jamnagar, check in at the hotel for a comfy overnight stay.
                </td>
            </tr>
            <th scope="row">day 5</th>
                <td><b>Jamnagar - Kutch</b><br>
                After breakfast in the morning, we will leave Jamnagar and to visit Anjar city, the center of textile and metal handicraft industry in the Kutch district. On arrival in Anjar, our representative will assist you with the check in process of your already booked resort. Check in at the resort and get ready to visit Gandhidam, famous for its marvellous textile market. Apart from witnessing the surprising textile items, you can pick as many of them as you like from the market. After shopping, return back to the resort for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 6</th>
                <td><b>Explore Kutch</b><br>
                Today morning, we will leave by road for Kutch that is blessed with a variety of traditional textiles and handicrafts. En-route, we will visit some tribal villages that are famous for their Ahir embroidery, Rabari embroidery and ajrakh block printing work which is famous worldwide. Thereafter, we will continue our journey to Kutch. On reaching Kutch, check in at the hotel. The rest of the day is free for exploring the markets and monuments of the Kutch region by your own. An overnight stay at the hotel in Kutch.
                </td>
            </tr>
            <th scope="row">day 7</th>
                <td><b>Full Day Village Tour</b><br>
                After breakfast in the morning, we will start our day with a visit to the local villages of Sodha Rajputs. These villages are inhabited by Hindu (Rabaris and Meghwal Harijans) and Muslim (Jaths and Muthwas) pastoral groups. You can send your rest of the day with the villages and witness their daily living. Also, you can enjoy their simple yet delicious home made food that will surely remind you of your old childhood days. Later return back to your hotel for an overnight stay.
                </td>
            </tr>
            <th scope="row">day 8</th>
                <td><b>Kutch - Dasada</b><br>
                In the morning after breakfast, we will leave Kutch to drive towards Dasada, famous for its Bharwad embroidery and Vadiara Rabari. Here, we will explore the hand work of local artisans and weavers. The place is best to see some of the great examples of Vadiara Rabari and Bharwad embroidery. Stay overnight at the hotel in Dasada.
                </td>
            </tr>
            <th scope="row">day 9</th>
                <td><b>Dasada - Patan - Dasada</b><br>
                Today, we will leave in the morning after breakfast to visit Patan, famous for its double-ikat weaving technique also known as Patola Silk Weaving. After spending the entire day in Patan exploring its rich textiles, we will return back to our hotel in Dasada for a relaxing overnight stay.                </td>
            </tr>
            <th scope="row">day 10</th>
                <td><b>Dasada - Ahmedabad</b><br>
                After breakfast in the morning, we will leave from Dasada by road for Ahmedabad. On arrival, check in at your already booked hotel for an overnight stay.            </tr>
            <th scope="row">day 9</th>
                <td><b>Ahmedabad</b><br>
                On the last day of your tour, you will be getting transferred to the Ahmedabad airport to board the flight for onward destination.                    <br>
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