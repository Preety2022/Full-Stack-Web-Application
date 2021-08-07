<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
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
   <title>DASHBOARD</title>
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
            <li><a href="https://www.linkedin.com/in/preetyakanksha" target="_blank"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
            <li><a href="books.php"><span class="glyphicon glyphicon-book"></span> Books</a></li>
            <li><a href="score.php"><span class="glyphicon glyphicon-certificate"></span> Result</a></li>
            <li><a href="result_analysis.php"><span class="glyphicon glyphicon-signal"></span> Analyse</a></li>
            <li><a href="bot.php"><span class="glyphicon glyphicon-comment"></span> Chat</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <div class="container" style="min-height: 100%;">
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
      <div class="row" style="margin-top:4rem;">
      <div class="col-xs-12 col-md-6" style="margin-top:1rem">
        <img src="images\1.jpg" class="img-responsive" >
      </div>
      <div class="col-xs-12 col-md-6" style="font-family: JuneBug ;">
        <h1 style="color: #FFA500; font-weight: bolder; text-transform:uppercase;">HELLO <?php echo $_SESSION['name']; ?></h1>
        <div style="margin-top: 6rem">
          <legend ><h2 style="font-weight: bold; color: #ffffff">YOUR PROFILE</h2></legend>
          <table class="table field" cellpadding="0" cellspacing="0">
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
              <th>GENDER</th>
              <th><i><?php echo $_SESSION['gender']; ?></i></th>
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
    <div class="row">
      <center><a href="form.php"><button class="btn btn-info" style="width: 45rem; height:5rem ;font-weight: bolder; font-size: 3rem; border-style: ridge;">Create Your Own Resume</button></a><br><br></center>
    </div>
  </div>
  </div>
  <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
</body>
</html>