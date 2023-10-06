<?php
	include 'admin/include/connect.php';
    session_start();
    error_reporting(0);
    $username=$_SESSION['username'];

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- custom css file link -->
	<link rel="stylesheet" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
	"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
	<style>
		    .f2 .resend {
                margin-top: 0.8rem;
                font-size: 15px;
                border: none;
                background: none;
                text-decoration: underline;
                color:#8e44ad;
				margin-left:150px;
			}
            .f2 .resend:hover{                       
                font-size: 15px; 
                color:#ff4584;
			}
	</style>
<body>
<?php



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




        //   echo"hello ====   $username";

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

          $mail->Body    = "thanks for registering!!
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

    $txtotp=$_POST['txtotp'];

    $phone = $_SESSION['phone'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $cpassword = $_SESSION['cpassword'];

    

    $hash = password_hash($password, PASSWORD_DEFAULT);   
    $result = mysqli_query($con, "SELECT * FROM tbl_otp WHERE otp = '$txtotp' AND exp!=1 AND NOW()<=DATE_ADD(date,INTERVAL 60*60 SECOND)");

    $male1=mysqli_num_rows($result);
    // echo"male1 ====== $male1";

    $matchedotp = mysqli_query($con,"SELECT * FROM tbl_otp WHERE otp ='$txtotp' AND exp!=1");

    $male=mysqli_num_rows($matchedotp);
    
    // echo"male ====== $male";


     
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
	<?php require 'includes/header.php'; ?>
<section>
	<div class="imgBx">
		<img src="images/photo-1475503572774-15a45e5d60b9.avif">
	</div>
	<div class="contentBx">
		<br><br>
		<div class="formBx">

		<h1 style="color:#ff4584">To verify your account</h1>
                    <div class="vv"> <span style="color:#8e44ad"><b>* * <?php echo $username ?></b></span> <span style="color:#8e44ad"><b> * *</b></span> </div>
			
			<form method="POST">
				<div class="inputBx">
					<span>Enter otp :</span>
					<input id="first" maxlength="6" name="txtotp" placeholder="One Time Password" >
				</div>				
				<div class="inputBx">
					<input type="submit" value="login" class="btn" name="otpv" style="background:#8e44ad;color:white;">
					<!-- <a href="setpsd.php" class="btn" style="background:#8e44ad;color:white; text-decoration:none;width:100%;border-radius:30px;">Submit</a> -->
				</div>
			</form>
			<form action="" method="post" class="f2"><button class="resend" name="resend"><b>Resend OTP</b></button>
                    </form>
		</div>
	</div>
</section>
</body>

</html>