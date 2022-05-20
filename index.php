<?php
require 'connect.php'; 
session_start();
if (isset($_SESSION['email'])) {
    header('location: dashboard.php');
      } 
elseif (isset($_SESSION['adminemail'])) {
  header('location: admin.php');}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- https://www.w3schools.com/bootstrap/bootstrap_get_started.asp -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');}</style>
   <style>@font-face {font-family: myFirstFont; src: url(sansation_light.woff);}</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style.css">
   <title>HOMEPAGE</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container" style="font-size: 2rem; font-weight:bold;">
      <div class ="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Nav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>  
        </button>
          <a href="#" class="navbar-brand">
            <img src="images\skill.png" class="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="Nav">
          <ul class="nav navbar-nav navbar-right" style="margin: 2rem;">
            <li><a href="#"><span class="glyphicon glyphicon-home"> HOME</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <div class="container" style="min-height: 100%;">
    <div class="row">
      <div class="col-xs-12 col-md-6" style="font-family: JuneBug">
        <h1 style="color: #FFA500; font-weight: bolder;">WELCOME TO STUDENT'S CORNER</h1>
        <h3 style="color:#ffffff">Hii!</h3>
        <p style="font-size: 2rem; color:#ffffff">This website is a Student Management System which serves as a tool to maintain the record of students. It is an initiative to provide a common platform to help students get the information of Books associated to their curriculum, to build their resume and much more.</p>
        <h4 style="color:#ffffff">Please Register soon!</h4><br><br><br><br><br><br>
        <a href="adminlogin.php"><button class="btn btn-info" style="width: 30rem; height:5rem ;font-weight: bolder; font-size: 3rem; border-style: solid;border-width: 0.2rem; border-color: darkred;">ADMIN LOGIN</button></a><br><br>
        <a href="login.php"><button class="btn btn-info" style="width: 30rem; height:5rem ;font-weight: bolder; font-size: 3rem; border-style: solid;border-width: 0.2rem; border-color: darkred;">STUDENT LOGIN</button></a><br>
      </div>
      <div class="col-xs-12 col-md-6">
        <img src="images\study.jpg" class="img-responsive" >
      </div>
    </div>
    <div class="row" style="margin-top: 5rem;">
      <center><a href="admission.php"><button class="btn btn-danger" style="width: 45rem; height:5rem ;font-weight: bolder; font-size: 3rem; border-style: ridge;">REGISTER FOR ADMISSION</button></a><br><br></center>
    </div>
  </div>
  <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
</body>
</html>