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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('server/errors.php'); ?>
	  <div class="register">
  	 
  	  <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptyfirstname'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Firstname is Required!! </small></center>
	<?php
	}
	?>

	  <div class="register">
  	  
  	  <input type="text" name="lastname" placeholder="Lastname" >
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptylastname'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Lastname is Required!! </small></center>
	<?php
	}
	?>
	  <div class="register">
  	  
  	  <input type="date" name="birthday" placeholder="Date of Birth" >
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptybirthday'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Birthday is Required!! </small></center>
	<?php
	}
	?>
	  <div class="register">
		  
  	  <input class="digits" type="tel" name="contact" placeholder="Contact Number (Format:09xxxxxxxxx)"  pattern="[0-9]{4}[0-9]{3}[0-9]{4}">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptycontact'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Contact number is Required!! </small></center>
	<?php
	}
	?>
	  <div class="register">
  	  
  	  <input type="text" name="address" placeholder="Complete Address" >
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptyaddress'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Complete Address is Required!! </small></center>
	<?php
	}
	?>
  	<div class="register">
  	  
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptyemail'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Email is Required!! </small></center>
	<?php
	}
	?>
	  <div class="register">
  	  
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptyusername'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Username is Required!! </small></center>
	<?php
	}
	?>
  	<div class="register">
  	  
  	  <input type="password" name="password_1" placeholder="Password">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'emptypassword'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Password is Required!! </small></center>
	<?php
	}
	?>
  	<div class="register">
  	  
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
	  <?php
	if(isset($_GET['error']) && $_GET['error'] == 'donotmatch'){
	?>
		<center 
		style= "font-family:Courier New;
		color: OrangeRed;
		margin-left:67px; 
		width:70%;">
		<small > Password do not match!! </small></center>
	<?php
	}
	?>
  	<div class="register">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an Account member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>