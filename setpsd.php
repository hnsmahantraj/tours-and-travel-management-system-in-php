<?php
    
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
		<img src="images/photo-1545389336-cf090694435e.avif">
	</div>
	<div class="contentBx">
		<br><br>
		<div class="formBx">

			<h2>forgot password?</h2>
			
			<form method="POST">
            <div class="inputBx">
					<span>password</span>
					<input type="password" name="password" placeholder="Enter password here.." >
				</div>
                <div class="inputBx">
					<span>confirm password</span>
					<input type="password" name="cpassword" placeholder="Enter confirm password here.." >
				</div>			
				<div class="inputBx">
					<input type="submit" value="login" class="btn" name="submit" style="background:#8e44ad;color:white;">
					<!-- <a href="login.php" class="btn" style="background:#8e44ad;color:white; text-decoration:none;width:100%;border-radius:30px;">Submit</a> -->
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>