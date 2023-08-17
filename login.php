<?php include('server/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body>
<header>
        <?php 
            include('bootstrap/navbar.php');
        ?>
    </header>
  <div class="header">
  	<p>Login</p>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('server/errors.php'); ?>
  	<div class="login">
  		
  		<input class="inside" type="text" name="username" placeholder="USERNAME">
  	</div>
  	<div class="login">
  		
  		<input class="inside" type="password" name="password" placeholder="PASSWORD">
  	</div>
  	<div class="login">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Do not have an Account? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>