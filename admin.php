<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['adminemail']))
{
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style1.css">
   <title>Logged In</title>
</head>
<body>
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <center>
        <img src="images\skill.png" width="40" height="40" style="margin-top:5rem"></center>
        <div class="media-body">
          <h3 class="text-center" style="color: orange;"> Navigation Bar </h3>

        </div>
      </div>
    </div>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
         <a href="register.php" class="link"><span class="glyphicon glyphicon-transfer"></span> Register Here</a>
      </li>
      <li class="nav-item">
         <a href="fee_update.php" class="link"><span class="glyphicon glyphicon-hourglass"></span> Fee Update</a>
      </li>
      <li class="nav-item">
         <a href="forgot.php" class="link"><span class="glyphicon glyphicon-pencil"></span>Update Password</a>
      </li>
      <li class="nav-item">
         <a href="adminlogout.php" class="link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      </li>
    </ul>
  </div>
  <button style="font-size: 3rem; position: fixed; z-index: 10;" id="btn"><span class="glyphicon glyphicon-list"></span></button>

  <!-- main page-->

  <div class="container-fluid page " style="margin-top: 5rem;">
    <div class="row">
      <center>
        <img src="images\search.png" class="img-responsive" style="max-height: 80px; margin-bottom: 3rem;">
        <form action="" method="post" target="_blank" style="margin-bottom: 5rem;">
          <input type="text" name="input" placeholder="Google Search.." required style="width:20rem; height: 5rem; border-style:outset; font-size: 2rem; font-weight: bold;">
          <input type="submit" name="sub" class="btn btn-primary btn-lg">
        </form>
        <?php 
         $search="https://www.google.com/search?q=";                        //google search query URL  --q for query
         if(isset($_POST['sub'])){
         $input = $_POST['input'];
         header("location: " .$search.$input.' ');      
          }
        ?>
      </center>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="slider">
          <figure>
            <img src="images\2.jpg" >
            <img src="images\3.jpg" >
            <img src="images\4.jpg" >
            <img src="images\5.jpg" >
          </figure>
        </div>
      </div>
      </div>
    </div>
    <div class="page">
    <div class="container">
      <div class="row" style="margin-top:4rem;">
      <div class="col-xs-12 col-md-6" style="margin-top:1rem">
        

      </div>
  </div>
</div>
</div>
  <div class="footer page">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
  <script>
    $(function(){
      $('#btn').on('click',function(){
        $('#sidebar,.page').toggleClass('active');
      });
    });
  </script>
</body>
</html>