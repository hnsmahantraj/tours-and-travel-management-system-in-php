<?php
$err="";

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		if(empty($_POST['username']))
		{
			$err = "*username required";
		}
		else
		{
			if(isset($_POST['username']))
			{
				if (filter_var($username,FILTER_VALIDATE_EMAIL)===false)
				{  
					$Erremail = "*enter proper format of mail id";   
				}
				// elseif(filter_var($username,FILTER_VALIDATE_EMAIL)===true){
				// 	header("location: fotp.php");
				// }
				else{
					echo "";
				}
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
	"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php require 'includes/header.php'; ?>
<section>
	<div class="imgBx">
		<img src="images/photo-1515859005217-8a1f08870f59.avif">
	</div>
	<div class="contentBx">
		<br><br>
		<div class="formBx">

			<h2>forgot password?</h2>
			
			<form method="POST">
				<div class="inputBx">
					<span>username :</span>
					<input type="text" name="username" placeholder="Enter username here.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
					<small style="color:red;"><?php  echo $err; ?></small>
				</div>				
				<div class="inputBx">
					<input type="submit" value="login" class="btn" name="submit" style="background:#8e44ad;color:white;">
					<!-- <a href="fotp.php" class="btn" style="background:#8e44ad;color:white; text-decoration:none;width:100%;border-radius:30px;">Submit</a> -->
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>