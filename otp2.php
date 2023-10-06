<?php   
    include 'admin/include/connect.php';
//     session_start();
//     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
//    {
//       header("location: login.php");
//       exit;
//    } 
    error_reporting(0);
    $username=$_SESSION['username'];
    $login = false;
    $showError = false;
    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     if(empty($_POST['txtotp']))
    //     {
    //         $showError = "enter OTP";	
    //     }
    // }
    
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- custom css file link -->
	<!-- <link rel="stylesheet" href="login.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php require 'includes/header.php'; ?>
	<?php
		if($login){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:2rem;">
				<strong>Success!</strong> you are logged in
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		}
		if($showError){
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:2rem;">
				<strong>ERROR!</strong> '. $showError .'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		}
	?>
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
    if(empty($_POST['txtotp'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! please enter otp</strong> '.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
    // echo"male ====== $male";


     
    if($male==1 && $male1==1){

 
            // $insertSql = "INSERT INTO `tbl_users` (`phone`, `username`, `password`, `dt`) VALUES ('$phone', '$username', '$hash', current_timestamp())";
    
            // $iquery = mysqli_query($con,$insertSql);
            // echo"hjnhujij";

            $quit="UPDATE `tbl_otp` SET `exp`=1 WHERE `otp`='$txtotp'";
            $re=mysqli_query($con,$quit);
            header("location:otp2.php");

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
    

        $login = false;
        $showError = false;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
            // 	header("location: otp2.php");
            // }
            if(empty($_POST['username']) && empty($_POST['password']))
            {
                $showError = "enter required details!!";	
            }
            include 'admin/include/connect.php';
            $username=$_POST["username"];
            $password=$_POST["password"];
            
                // $sql = "SELECT * FROM `user_form` WHERE username='$username' AND password='$password'";
                $sql = "SELECT * FROM `tbl_users` WHERE  username='$username'";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                
                if($num == 1)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        if(password_verify($password, $row['password']))
                        {
                            $login = true;
                            session_start();
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $username;
                            $_SESSION['user_id'] = $row['id'];
                            header("location: login.php");
                        }
                        else
                        {
                            $showError = "invalid credentials";
                        }
                    }
                }
                else
                {
                    $showError = "invalid credentials";
                }
                ///validate form
                
                    // if(empty($_POST['username']) && empty($_POST['password']))
                    // {
                    // 	// header("location: login.php");
                    // 	$Erremail = "username required";	
                    // }
                
        }
        //validate emailor username
        $Erremail="";
        if(isset($_POST['login']))
        {
            if(empty($_POST['username']))
            {
                $Erremail = "*username required <br/>";
            }
            else
            {
                if (filter_var($username,FILTER_VALIDATE_EMAIL)===false)
                {  
                    $Erremail = "*enter proper format of mail id";   
                }
                else{
                    echo "";
                }
            }
        }
        //validate password length
        $errpassword = "";
        if(isset($_POST['login']))
        {
            if(empty($_POST['password']))
            {
                $errpassword = "*password required <br/>";
            }
            else
            {
                if(!preg_match("/^[A-Za-z]\w{7,14}$/", $_POST['password']))
                {
                    $errpassword =  "*enter only 8 characters <br/>";
                }
                else{
                    $errpassword =  "";
                }
            }
        }

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- custom css file link -->
	<link rel="stylesheet" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	
	<?php
		if($login){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:2rem;">
				<strong>Success!</strong> you are logged in
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		}
		if($showError){
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:2rem;">
				<strong>ERROR!</strong> '. $showError .'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		}
	?>
<section>
<div class="imgBx">
	<img src="images/image.jpeg">
</div>
<div class="contentBx">
		<!-- <br><br> -->

	<div class="formBx">

		    <h2 style="color:#ff4584">USER verification</h2>
			
			<form method="POST">
                <h6>To verify your account</h6>
                <div style="color:#8e44ad"> <span style="color:#8e44ad">* * <?php echo $username ?></span> <small style="color:#8e44ad"> * *</small> </div>
                <div class="inputBx">
                    <span>otp :</span>
                    <input type="text" name="txtotp" placeholder="Enter One Time Password" maxlength="6" >
                    <small style="color:red;"><?php  echo $Erremail; ?></small>
                </div>
                <div class="inputBx">
                    <input type="submit" value="validate" class="btn" name="otpv" style="background:#8e44ad;color:white;">
                </div>
            </form>
    </div>
</div>
</section>
</body>


</body>

</html>