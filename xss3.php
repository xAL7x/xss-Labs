<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<br>
	<br>
	<br>
	<br>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">username</label>
									<input id="email" type="text" class="form-control" name="username" value="" required autofocus>
									
								</div>
								<p>Password</p>
								<form method="GET">
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								<br>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
							</form>
							<?php
if(
	$_POST['username']==admin and $_POST['password']==password
){
	echo "<button><a href='xss3v2.php'>login is found</a></button>";
}
else{
	echo "login not found";
}
?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>