<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body>
<header>
        <?php 
            include('bootstrap/navindex.php');
        ?>
    </header>

<div class="header">
	<h2>Home Page</h2>
</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
			  
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

		
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br><br>
		<?php echo " <center> Account QRcode </center>"; ?>

		
			<center><img src='img/<?php echo $_SESSION['username'] ?>.png' ></center>
			<?phpQRcode::png($text,$file);?>
			<div class="note">
			<?php echo " <center> NOTE: <span>Your QRcode contains your Firstname, Lastname, Contact number and Address.</span> <br>
			<span> You can use your QRcode offline by taking a screenshot of it. </center> </span> "; ?>
			</div>
			
		
		
    	<p>  </p>
    <?php endif ?>
</div>

</body>
</html>