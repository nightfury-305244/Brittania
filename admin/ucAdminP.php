<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../assets/css/stylesAP.css">


    <title>Admin Login</title>
</head>

<body>

	<div class="login_container">
	<div class="screen">
		<div class="screen__content" >
			<form class="login" action="authenticate.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email" name="username" id="username" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password" id="password" required>
				</div>
				<div>
					
					<?php
						session_start();
						if (isset($_SESSION['error'])): ?>
							<p style="color:red;"><?php echo htmlspecialchars($_SESSION['error']); ?></p>
							<?php unset($_SESSION['error']); ?>
					<?php endif; ?>
				</div>
				<button class="button login__submit" type="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>


</body>
</html>