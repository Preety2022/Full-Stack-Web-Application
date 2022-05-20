<?php
require 'connect.php'; 
session_start();
if (!isset($_SESSION['adminemail'])) {
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
   <style>@font-face {font-family: myFirstFont; src: url(sansation_light.woff);</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style2.css">
   <title>FORGOT PASS</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container" style="font-size: 2rem;">
      <div class ="navbar-header">
         
        </button>
        <a href="#" class="navbar-brand">Change Password</a>
        </div>
      </div>
   </nav>
   <div class="container">
   	  <div class=" col-xs-12 col-md-offset-3 col-md-6">
   	  	<div class="panel panel-success">
   	  	<div class="panel-body">
   	  		<form method="POST" action="pass.php">
   	  			Email  <input type="email" name="email" class="form-control" placeholder="e-mail" required="TRUE"><br><br>
   	  			New Password <input type="password"  name="password" class="form-control" placeholder="new password" required="TRUE">
   	  	<div class="panel-footer">
   	  		<center><a href="log.html"><button type="Submit" class="btn btn-success">Change Password</button></a></center></div>
          </form>
   	  	</div>
   	  	</div>
   	  </div>
   </div>
    <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
</body>
</html>