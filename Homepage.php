<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
        <?php 
            include('bootstrap/navbar.php');
        ?>

        <div class="content">
          <center><h1>Iloilo Contact Tracing App</h1></center>
        </div>
        <div class="contents">
        

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="images/content1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/content2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/content3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/content4.png" alt="">
        </div>
        <div class="slide">
          <img src="images/content5.png" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
</body>
</html>