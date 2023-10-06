<?php

session_start();



  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require('PHPMailer.php');
  require('Exception.php');
  require('SMTP.php');

 $showalert = false;
 $showError = false;
 $errimage = " ";
 $image="";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['submit']))
    {
        if(empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['cpassword']))
        {
           $showError = "enter details required!! ";
        }
    }
	include 'admin/include/connect.php';
    $name=$_POST["name"];
    $_SESSION['name'] = $name;
    
    $phone=$_POST["phone"];
    $_SESSION['phone'] = $phone;

    $username=$_POST["username"];
    $_SESSION['username'] = $username;

    $password=$_POST["password"];
    $_SESSION['password'] = $password;

    $cpassword=$_POST["cpassword"];
    $_SESSION['cpassword'] = $cpassword;

    // $image=$_POST["image"];
    // $_SESSION['image'] = $image;

    // $image = $_FILES['image']['name'];
    // $image_size = $_FILES['image']['size'];
    // $image_tmp_name = $_FILES['image']['tmp_name'];
    // $image_folder = 'login system with avatar/uploaded_img/'.$image;
    // // $_SESSION['image'] = $image;
    
    $exists=false;
    // check whether this username exists or not
    $existSql = "SELECT * FROM `tbl_users` WHERE username = '$username'";
    $result = mysqli_query($con, $existSql);
    $numexistsrows = mysqli_num_rows($result);
    if($numexistsrows==0)
    {
        $showError="enter the details asked!!";
    }
    if($numexistsrows > 0)
    {
        // $exists = true;
        $showError = "enter details required!!";
    }
    else
    {
        $Erremail="";
        // $username=$_POST["username"];
        if(isset($_POST['submit']))
        {
            if(empty($_POST['username']))
            {
                $Erremail = "*username required <br/>";
            }
            else
            {
                if (filter_var($username,FILTER_VALIDATE_EMAIL)===false)
                {  
                    // $Erremail = "*enter proper format of mail id <br/>"; 
                    $showError = "enter proper format of mail id.";
                }
                else{
                    $Erremail = "";
                }
            }
        }


        // $exists = false;
        if(($password == $cpassword))
        {
            $otp = rand(100000, 999999);

                    $mail = new PHPMailer(true);

                    try {
                        //Server settings

                        $mail->isSMTP();
                        $mail->Host       = 'smtp.gmail.com';
                        $mail->SMTPAuth   = true;
                        $mail->Username   = 'garvgujarat@gmail.com';
                        $mail->Password   = 'wjtyxmfioyxwxxja';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port       = 465;

                        //Recipients
                        $mail->setFrom('garvgujarat@gmail.com', 'registration verification');
                        $mail->addAddress($username);     //Add a recipient
                     
                        // $mail->isHTML(true);
                        //$msg=file_get_contents("beefree-wbrjvkqo22s.php");

                        $mail->Subject = 'Sign Up Verification';
                        $mail->Body    = "otp is ".$otp;
                        $mail->MsgHTML = ('h');
                        $mail->send();
                        $sql = "INSERT INTO tbl_otp(otp)VALUES ('$otp')";
                        $run = mysqli_query($con, $sql);
                        $_SESSION['username'] = $username;
                        // header("location:fotp.php");
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                if($image_size > 2000000){
                    $errimage = 'image size is too large!';
                }

                                 
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `tbl_users` ( name, phone, username, password, dt) VALUES ( '$name', '$phone', '$username', '$hash', current_timestamp())";
                $result = mysqli_query($con, $sql);
            if($result)
            {
                $showalert = true;
                move_uploaded_file($image_tmp_name, $image_folder);
                // $showalert="registered succcessfully!!";
                header("location: otp2.php");
            }
            else{
                $showError = "registered failed";
            }
        }
        else
        {
            $showError = "passwords do not match.";
        }
    }  

    
}

$errphone="";
if(isset($_POST['submit']))
{
    if(empty($_POST['phone']))
    {
        $errphone = "*mobile number required <br/>";
    }
    else
    {
        if (strlen($_POST['phone']) < 10 ) 
        {
            $errphone = "*please enter 10 digit number only <br/>";
        }
        else if(!preg_match("/^[0-9]*$/", $_POST['phone']))
        {
            $errphone = "*invalid moblie number <br/>";
        }
        else{
            $errphone = "";
        }
    }
}

//validate username or email
$Erremail="";
        // $username=$_POST["username"];
        if(isset($_POST['submit']))
        {
            if(empty($_POST['username']))
            {
                $Erremail = "*username required <br/>";
            }
            else
            {
                if (filter_var($username,FILTER_VALIDATE_EMAIL)===false)
                {  
                    $Erremail = "*enter proper format of mail id <br/>";   
                }
                else{
                    $Erremail = "";
                }
            }
        }

//validate password
$errpassword = "";
if(isset($_POST['submit']))
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

$errname = "";
if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
        $errname = "*name required <br/>";
    }
    else
    {
        if(!preg_match("/^[A-Za-z]*$/", $_POST['name']))
        {
            $errname =  "*enter only  characters <br/>";
        }
        else{
            $errname =  "";
        }
    }
}


?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>

    <!-- custom css file link -->
	<link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <?php
        if($showalert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:2rem;">
                <strong>Success!</strong> your account is created successfully and now you can login.
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
		<img src="images/img-5.jpg">
	</div>
	<div class="contentBx">
		<br><bR>
		<div class="formBx">
            <br><br>
			<h2>sign up </h2>
			
			<form method="POST" action="" enctype="multipart/form-data">
            <div class="inputBx">
					<span>name:</span>
					<input type="text" name="name" placeholder="Enter name here.." required>
                    <small style="color:red;"><?php  echo $errname; ?></small>
				</div>
				<div class="inputBx">
					<span>mobile:</span>
					<input type="text" name="phone" placeholder="Enter mobile number here.." pattern="^\d{10}$"
                                    maxlength="10" required>
                    <small style="color:red;"><?php  echo $errphone; ?></small>
				</div>
                <div class="inputBx">
					<span>username:</span>
					<input type="text" name="username" placeholder="Enter username here.." required >
                    <small style="color:red;"><?php  echo $Erremail; ?></small>
				</div>
				<div class="inputBx">
					<span>password</span>
					<input type="password" name="password" placeholder="Enter password here.." required>
                    <small style="color:red;"><?php  echo $errpassword; ?></small>
				</div>
                <div class="inputBx">
					<span>confirm password</span>
					<input type="password" name="cpassword" placeholder="Enter confirm password here.." required>
                    <small style="color:red;"><?php  echo $errpassword; ?></small>
				</div>
                <!-- <div class="inputBx">
					<span>Profile image</span>
					<input type="file" name="image"  accept="image/jpg, image/jpeg, image/png">
                    <small style="color:red;"><?php  echo $errimage; ?></small>
				</div> -->
			
				<div class="inputBx">
                    <input type="submit" value="sign up" class="btn" name="submit" style="background:#8e44ad;color:white;"></button>
				</div>
				<div class="inputBx" style="text-align:center;">
					<p>don't have an account?  <a href="login.php">login</a></p>
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>