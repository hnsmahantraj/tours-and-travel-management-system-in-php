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
	
<section>
	<div class="imgBx">
		<img src="images/image.jpeg">
	</div>
	<div class="contentBx">
		<!-- <br><br> -->

		<div class="formBx">

			<h2>ENTER OTP HERE</h2>
			
			<form method="POST">
				<div class="inputBx">
					<span>username :</span>
					<input type="text" name="username" placeholder="Enter email address here.." >
					<!-- <small style="color:red;"><?php  echo $Erremail; ?></small> -->
				</div>
				
				<div class="inputBx">
					<input type="submit" value="login" class="btn" name="login" style="background:#8e44ad;color:white;">
				</div>
				<div class="inputBx" >
					<!-- <p style="text-align:center;font-size:1.3rem;"></p> -->
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>
</body>
</html>