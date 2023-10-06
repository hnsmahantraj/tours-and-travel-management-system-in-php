<?php

 $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['submit']) && empty($_POST['username']) && empty($_POST['password'])){
		header("location: otp2.php");
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
					// header("location: home.php");
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
		// /validate form
		
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
	if($_POST['username']=="radhi09@gmail.com" && $_POST['password']=="radhi09"){
		header("location: admin/adminread.php");
	}
	if($_POST['username']=="tghensi@gmail.com" && $_POST['password']=="henu1533"){
		header("location: tourguide/tgdashboard.php");
	}
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
	<?php require 'includes/header.php'; ?>
	<?php
		if($login){
			if(isset($_POST['login']))
			{
				if(empty($_POST['username']) && $_POST['password'])
				{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:2rem;">
					<strong>error!</strong> enter details to login
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}else{
					header("location: home.php");
				}
			}
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

			<h2>login</h2>
			
			<form method="POST">
				<div class="inputBx">
					<span>username :</span>
					<input type="text" name="username" placeholder="Enter email address here.." >
					<small style="color:red;"><?php  echo $Erremail; ?></small>
				</div>
				<div class="inputBx">
					<span>password</span>
					<input type="password" name="password" placeholder="Enter password here.." >
					<small style="color:red;"><?php  echo $errpassword; ?></small>
				</div>
				<div class="link">
					<a href="" style="text-align:center;font-size:1rem;">forgot password?</a>
					<!-- <a href="changepsd.php" style="text-align:center;font-size:1rem; paddding-left:10px;">change password?</a> -->
				</div><br>
				
				<div class="inputBx">
					<input type="submit" value="login" class="btn" name="login" style="background:#8e44ad;color:white;">
				</div>
				<div class="inputBx" >
					<p style="text-align:center;font-size:1.3rem;">don't have an account?<a href="reg.php"style="text-align:center;font-size:1.3rem;">sign-up</a></p>
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>