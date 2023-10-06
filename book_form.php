<?php 
         include 'admin/include/connect.php';
         session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
         $sql="SELECT * FROM `tbl_bookings` ORDER BY `bid` DESC";
         $result=mysqli_query($con, $sql);
         $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="style.css">

    <title>ticket receipt</title>

    <style>
        
        table{
                padding:10px;
                margin-left:250px;
                border:1px solid gray;
                width:60%;
                box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        }
        table th{
                border-bottom:2px solid gray;
        }
        table tr, td{
                padding:20px;
        }
    </style>
</head>
<body>

<table>
                <th><img src="images/unnamed.png" alt="" height="150px" width="150px"></th>
                <th  colspan="5"><h1 style="color:#8e44ad; font-size:3rem">Ticket confirmed</h1><br><h3>congratulations your trip have been booked<br></h3>your guide will contact you</th>
        
        <tr>
                <td rowspan="5"></td>
                <td style="font-size:1.5rem;"><b>date: </b></td>
                <td><b><?php echo $row['arrivals']; ?></b></td>
                <!-- <td style="font-size:1.5rem;"><B>ticket number</b></td>
                <td><b></b></td> -->
        </tr>
        <tr>
                <td style="font-size:1.5rem;"><b>full name of the passenger</b></td>
                <td><b><?php echo $row['name']; ?></b></td>
                <td style="font-size:1.5rem;"><b>email-id of passenger</b></td>
                <td><b><?php echo $row['email']; ?></b></td>
        </tr>
        <tr>
               <td style="font-size:1.5rem;"><b>passenger contact number:</b></td>
               <td><b><?php echo $row['phone']; ?></b></td>
               <!-- <td style="font-size:1.5rem;"><b>total value of Ticket</b></td>
               <td><b></b></td> -->
        </tr>
        <tr>
                <td style="font-size:1.5rem; color:#8e44ad"><b><i class="fas fa-map-marked-alt" style="font-size:2rem"></i><br>location to visit</b></td>
                <td><b><?php echo $row['place']; ?></b></td>
                <!-- <td style="font-size:1.5rem; color:#8e44ad"><b>time</b></td>
                <td><b></b></td> -->
        </tr>
        <tr>
                <td style="font-size:1.5rem; color:#8e44ad"><i class="far fa-address-book" style="font-size:2rem"></i><br><b>pickup contact</b></td>
                <td style="font-size:1.5rem; color:#8e44ad"><b>phone number</b></td>
                <td><b><?php echo $row['phone']; ?></b></td>
                <td style="font-size:1.5rem; color:#8e44ad"><b>email</b></td>
                <td><b><?php echo $row['email']; ?></b></td>
        </tr>
</table>
<button type="submit" value="submit" class="btn" name="submit" onclick="window.print();" id="print_btn" style="margin-left:580px;">download the receipt</button>
<!-- <button><a href="stripe_php_payment_gateway/index.php"></a>make payment</button> -->
<button style="color:white; margin-right:20px" class="btn"><a href="stripe_php_payment_gateway/index.php" style="color:white">Make payment</a></button>;

</body>
</html>