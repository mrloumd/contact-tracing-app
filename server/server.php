<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$birthday = "";
$contact = "";
$address = "";
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'contact_tracing_app');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if(empty($_POST['firstname'])){header('Location:register.php?error=emptyfirstname');
        exit;  
    }if(empty($_POST['lastname'])){header('Location:register.php?error=emptylastname');
        exit;
    }
    if(empty($_POST['birthday'])){header('Location:register.php?error=emptybirthday');
        exit;
    }
    if(empty($_POST['address'])){header('Location:register.php?error=emptyaddress');
        exit;
    }
    if(empty($_POST['contact'])){header('Location:register.php?error=emptycontact');
        exit;
    }
    if(empty($_POST['email'])){header('Location:register.php?error=emptyemail');
        exit;
    }
    if(empty($_POST['username'])){header('Location:register.php?error=emptyusername');
        exit;
    }
    if(empty($_POST['password_1'])){header('Location:register.php?error=emptypassword');
        exit;
    }
    if($password_1 != $password_2){header('Location:register.php?error=donotmatch');
        exit;
    }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname, lastname, birthday, contact, address, username, email, password) 
  			  VALUES('$firstname','$lastname','$birthday','$contact','$address','$username','$email','$password')";
  	mysqli_query($db, $query); 
    $_SESSION['firstname'] = $firstname;
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: QRcode.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT firstname FROM users WHERE username='$username'  AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['firstname'] = $firstname;
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: QRcode.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

include("phpqrcode/qrlib.php");
if(isset($_POST ['reg_user']))
    { 
     
        $path = 'img/';
        $file = $path.$_POST['username'].'.png';
        $text = $_POST['firstname']." ".$_POST['lastname']." / ".$_POST['contact']." / ".$_POST['address'];
        ?>
        <?php $_POST['username'] ?>
        
        <?php
        QRcode::png($text,$file);
    }

?>