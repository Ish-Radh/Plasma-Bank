<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Plasma Bank</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.png" />
		<link rel="stylesheet" type="text/css" href="resstyle.css" media="all" />
	</head>
	<body>
		<div class="head">
			<div class="container">
				<div class="logo-area">
					<a href="#" title="Go to Facebook" ><img src="image/logo.png" alt="logo" /></a>
				</div>
				<div class="login-area">
					<form action="login.php" method="post">
						<div class="email">
							<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
							<?php } ?>
							<label for="email">Username</label>
							<input type="text" name="uname" placeholder="User Name">
						</div>
						<div class="pass">
						<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
						<?php } ?>
							<label for="pass">Password</label>
							<input type="password" name="password" placeholder="Password">
							<a href="">.</a>
						</div>
						<div class="submit">
							<button type="submit">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="mid">
			<div class="container">
				<div class="mleft">
					<div class="text">
						Donate plasma, save lifes.
					</div>
					<div class="photo">
						<img src="image/pb.png" alt="Wold Map" />
					</div>
				</div>
				<div class="mright">
					<div class="up">
						<a href="signup.php" class="ca">Create an account</a>
					</div>
					
					<div class="last">
						
					</div>
				</div>
			</div>
		</div>
		
		