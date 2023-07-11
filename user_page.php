<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');

}?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
<div class="icon">
      <h2 href="E-BPS.html" class="logo"><i class="fas fa-bus"></i>E-BPs</h2>
</div>
<div class="container">

   <div class="content">
      <h3><span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is your page</p>
      <a href="#" class="btn">About</a>
      <?php 
      if($_SESSION['user_name']=='K.Surekha')
      {
         header('location:about_su.php');
      }
      elseif($_SESSION['user_name']=='M.Manoj')
      {
         header('location:about_manoj.php');
      }
      else{
         header('location:about.php');
      }
      ?>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>