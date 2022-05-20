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
   <title>Profile</title>
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
            <li><a href="https://www.linkedin.com/in/preetyakanksha" target="_blank"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
            <li><a href="dashboard.php"><span class="glyphicon glyphicon-education"></span> Dashboard</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <div class="container-fluid">
      <div class="row" style="margin-top:4rem;"> 
      <div class="col-xs-12 col-md-6">
        <img src="images\1.jpg" class="img-responsive" style="margin-top: 5rem;" ><br><br>
      </div>

      <div class="col-xs-12 col-md-6" style="font-family: JuneBug ;" id="start1">
      <div style="margin-top: 6rem; " id="start2" ;>
          <legend ><h2 style="font-weight: bold; color: #ffffff">Fetch Student's Data</h2></legend>
          <table class="table field" cellpadding="0" cellspacing="0">
            <form method="post" action="main_script.php">
            <tr>
              <th>NAME</th>
              <th><i><input type="text" name="roll" placeholder="Enter university roll" required></i></th>
            </tr>
            <tr>
              <th>Fetching Results..</th>
              <th><i><input type="submit" name="display" onclick="func1"></i></th>
            </tr>
          </form>
          </table>
        </div>
      </div>


      <div class="col-xs-12 col-md-6" style="font-family: JuneBug ;display: none;" id="start1">
        <center>
          
          <div style="height: 250px; width:250px; border: 5px solid; margin-top: 5rem"><?php echo '<img src="data:image;base64, '.base64_encode($_SESSION['image']).' " alt="Image" style="width:100%; height:100%" >';  ?>
          </div>
        </center>


        <div style="margin-top: 6rem; ">
          <legend ><h2 style="font-weight: bold; color: #ffffff">YOUR PROFILE</h2></legend>
          <table class="table field" cellpadding="0" cellspacing="0">
            <tr>
              <th>NAME</th>
              <th><i><?php echo $_SESSION['name']; ?></i></th>
            </tr>
            <tr>
              <th>REG NO</th>
              <th><i><?php echo $_SESSION['reg_no']; ?></i></th>
            </tr>
            <tr>
              <th>ROLL</th>
              <th><i><?php echo $_SESSION['roll']; ?></i></th>
            </tr>
            <tr>
              <th>DOB</th>
              <th><i><?php echo $_SESSION['dob']; ?></i></th>
            </tr>
            <tr>
              <th>BATCH</th>
              <th><i><?php echo $_SESSION['batch']; ?></i></th>
            </tr>
            <tr>
              <th>Uni Roll</th>
              <th><i><?php echo $_SESSION['univ_roll']; ?></i></th>
            </tr>
            <tr>
              <th>Email</th>
              <th><i><?php echo $_SESSION['studentemail']; ?></i></th>
            </tr>
            <tr>
              <th>CONTACT</th>
              <th><i><?php echo $_SESSION['contact']; ?></i></th>
            </tr>
            <tr>
              <th>STATE</th>
              <th><i><?php echo $_SESSION['state']; ?></i></th>
            </tr>
          </table>
        </div>
        <br><br><br><br><br><br>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
  <script>
    function func1(){
       jQuery('#start2').hide();
       jQuery('#start1').show();
    }
  </script>
</body>
</html>