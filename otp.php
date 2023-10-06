<?php   
    include 'admin/include/connect.php';
    session_start();
    error_reporting(0);
    $username=$_SESSION['username'];
     
    // echo"$username";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>OTP</title>
 <!-- custom css file link -->
 <link rel="stylesheet" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    
</head>

<body>

    <?php
    include("includes/header.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


  require('PHPMailer.php');
  require('Exception.php');
  require('SMTP.php');

  if(isset($_POST['resend'])){
  
      $news = mysqli_query($con, "UPDATE tbl_otp SET exp=1");
      $otp = rand(100000, 999999);
      $mail = new PHPMailer(true);

      try {
          echo"hello ====   $username";
          //Server settings
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'garvgujarat@gmail.com';
          $mail->Password   = 'wjtyxmfioyxwxxja';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port       = 465;

          //Recipients
          $mail->setFrom('garvgujarat@gmail.com', 'Garvi Gujarat');
          $mail->addAddress($username);     //Add a recipient
       
          // $mail->isHTML(true);
          //$msg=file_get_contents("beefree-wbrjvkqo22s.php");

          $mail->Subject = 'Sign Up Verification';

          $mail->Body    = "thanks for registering in Garvi Gujarat!!
                          Your otp for verification is  ".$otp;

          $mail->MsgHTML = ('h');
          $mail->send();

          $sql = "INSERT INTO tbl_otp(otp)VALUES ('$otp')";
          $run = mysqli_query($con, $sql);

          $_SESSION['username'] = $username;

      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }

  }
$showerror = false;
$showwarning = false;

if(isset($_POST['otpv']))
{
    // header('location: login.php');
    $txtotp=$_POST['txtotp'];
    $phone = $_SESSION['phone'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $cpassword = $_SESSION['cpassword'];

    $hash = password_hash($password, PASSWORD_DEFAULT);   
    $result = mysqli_query($con, "SELECT * FROM tbl_otp WHERE otp = '$txtotp' AND exp!=1 AND NOW()<=DATE_ADD(date,INTERVAL 60*60 SECOND)");
    $male1=mysqli_num_rows($result);
    
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! please enter otp</strong> '.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';

    $matchedotp = mysqli_query($con,"SELECT * FROM tbl_otp WHERE otp ='$txtotp' AND exp!=1");

    $male=mysqli_num_rows($matchedotp);
    
    if($male==1 && $male1==1){

 
            // $insertSql = "INSERT INTO `tbl_users` (`phone`, `username`, `password`, `dt`) VALUES ('$phone', '$username', '$hash', current_timestamp())";
    
            // $iquery = mysqli_query($con,$insertSql);
            // echo"hjnhujij";

            $quit="UPDATE `tbl_otp` SET `exp`=1 WHERE `otp`='$txtotp'";
            $re=mysqli_query($con,$quit);
            header("location:login.php");

        }
    


    // }elseif(!mysqli_num_rows($matchedotp)){   

    //     $showerror = "OTP is Invalid "; 

    // }elseif(!mysqli_num_rows($result)){

    //     $news = mysqli_query($con, "UPDATE tbl_otp SET exp=1 WHERE otp = '$txtotp'");
    //     $showerror = "OTP is expire ";
    // }

}
// }

  if($showerror){

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    }
    
?>
<section>
<!-- <div class="imgBx"  style="margin-left:120px; ">
	<img src="images/image.jpeg" >
</div> -->
<div class="contentBx" style="min-height: 100vh;
   background: url('images/images (2).jpg') no-repeat;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;background-size: cover;
      object-fit: cover;
      background-position: center;border-box:0 .5rem 1rem rgba(0,0,0,0);
      min-width:100%">
		<!-- <br><br> -->

	<div class="formBx" style="background-color:white; align-content:center;padding:50px; border-radius:30px; box-shadow:0 .5rem 1rem rgba(0,0,0,.1);">

		    <h2 style="color:#ff4584; ; margin-top:px; ">USER verification</h2>
            <hr width:18% height:3px style="color: #ff4584;"></hr>
			
			<form method="POST" style="x">
                <h6>To verify your account</h6>
                    <div style="color:#8e44ad"> <span style="color:#8e44ad">* * <?php echo $username ?></span> <small style="color:#8e44ad"> * *</small> </div>
                <div class="inputBx">
                    <span style="color:#ff4584"><b>username :</b></span><br>
                    <input type="text" name="txtotp" placeholder="Enter One Time Password" maxlength="6" style="border:1px solid black; border-radius:30px ;padding:10px; width:100%">
                    <small style="color:red;"><?php  echo $Erremail; ?></small>
                </div><br><br>
                <div class="inputBx" style="margin-left:80px">
                    <input type="submit" value="validate" class="btn" name="otpv" style="background:#8e44ad;color:white;">
                </div>
            </form>
    </div>
</div>
</section>
<!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- <script>

  alert("OTP Valid For 60 second");

</script> -->

</body>
</html>