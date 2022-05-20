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
   <link rel="stylesheet" type="text/css" href="stylesheets\style2.css">
   <title>REGISTER</title>
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
            <img src="images\skill.png" class="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="Nav">
          <ul class="nav navbar-nav navbar-right" style="margin: 2rem;">
            <li><a href="admin.php"><span class="glyphicon glyphicon-education"></span> Dashboard</a></li>
          </ul>
        </div>
    </div>
   </nav>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-xs-12 col-md-offset-3 col-md-6">
	  <center>
     <div class="des" style="font-family: JuneBug;">
   	  REGISTER
     </div>
     <div class="des1">
     	 <img src="images\id.png" alt="REGISTER" id="reg"><br><br>
     	<form method="POST" action="reg.php" enctype="multipart/form-data">
      <div class="form-group ">
   	  <label for="name">Name</label> <input type="text" name="name" placeholder="full name"  required="TRUE"><br><br>
       </div>
      <div class="form-group">
   	  <label for="email">Email</label><input type="email" name="email" placeholder="e-mail" required="TRUE"><br><br></div>
      <div class="form-group">
  		<label for="contact">Contact</label> <input type="text" name="contact" placeholder="contact" required="TRUE" pattern="[0-9]{10}"><br><br></div>
      <div class="form-group">
      <label >Class Roll</label><input type="text" name="roll" placeholder="roll no" required><br><br></div>
      <div class="form-group">
        <label >University Roll</label><input type="text" name="uniroll" placeholder="university roll no" required><br><br></div>
      <div class="form-group">
      <label >Reg No</label><input type="text" name="reg_no" placeholder="registration no" required><br><br></div>
      <div class="form-group">
      <label>Batch</label><input type="text" name="batch" placeholder="batch" required><br><br></div>
      <div class="form-group">
      <label for="dob">Date of Birth</label><input type="date" name="dob" placeholder="DOB" style="width: 27rem;" required><br><br></div>
      <!--<div class="form-group">
      <label >Gender</label>
      <select name="gender" style=" width: 27rem ;background-color: #000000">
      <option value="male" >Male</option>
      <option value="female">Female</option>
      <option value="trans" >Transgender</option>
      </select><br><br></div>-->
      <div class="form-group">
  		<label for="password">Password</label> <input type="password"  name="password" placeholder="password" required="TRUE"><br><br></div>
      <div class="form-group">
  		<label for="address">Address</label> <input type="text" name="address" placeholder="address" required="TRUE"><br><br></div>
      <div class="form-group">
  		<label for="city">City</label> <input type="text"  name="city" placeholder="your city" required="TRUE"><br><br></div>
      <div class="form-group">
  		<label for="postal_code">Postal Code</label> <input type="text"   name="postal_code" placeholder="postal code" required="TRUE" pattern="[0-9]{6}"><br><br></div>
      <div class="form-group">
  		<label for="state">State</label> <input type="text"   name="state" placeholder="state" required="TRUE"><br><br></div>
      <div class="form-group">
  		<label for="country">Country</label> <input type="text"  name="country" placeholder="country" required="TRUE"><br><br></div>
      <label for="name">Image(jpg/png)</label> <input type="file" name="image" required="TRUE"><br><br>
  		<center><input type="submit" class="btn btn-lg" style="background-color: #000000; font-weight: bolder; color: white;" name="Register" id="click" ></center>
      </div>
  		</form>
     </div>
    </center>
  </div>
</div>
</div>
<div class="footer">
  <p>DESIGNED BY PREETY AKANKSHA<br>
  Contact: akankshapreety4545@gmail.com</p>
</div>
</body>
</html>