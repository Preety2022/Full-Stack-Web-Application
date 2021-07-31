<?php
require 'connect.php'; 
session_start();
if (isset($_SESSION['email'])) {
    header('location: dashboard.php');
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
   <link rel="stylesheet" type="text/css" href="stylesheets\style2.css">
   <title>LOGIN</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container" style="font-size: 2rem;">
      <div class ="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Nav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>  
        </button>
          <a href="#" class="navbar-brand">
            <img src="images\logo.png" class="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="Nav">
          <ul class="nav navbar-nav navbar-right" style="margin: 2rem;">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
               <li><a href="forgot.php"><span class="glyphicon glyphicon-user"></span> forgot password?</a></li>
            </ul>
          </div>
      </div>
   </nav>
   <div class="container">
   	  <div class="col-xs-12 col-md-offset-3 col-md-6">
   	  	<div class="panel panel-primary">
   	  		<div class="panel-heading">
   	  			<center><h1>Login</h1></center>
   	  		</div>
   	  	<div class="panel-body">
   	  		<form method="POST" action="login_sub.php">
   	  			Email    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" placeholder="e-mail" required="TRUE"><br><br>
   	  			Password : <input type="password" name="password" placeholder="password" required="TRUE">
   	  		
   	  	</div>
   	  	<div class="panel-footer">
   	  		<center><a href="#"><button class="btn btn-primary" type="Submit">Submit</button></a></center>
            </form>
   	  	</div>
   	  	<div>
   	  </div>
   </div>
         <div class="foot">
       Designed by Preety_Akanksha 
      </div>
</body>
</html>