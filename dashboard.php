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
   <title>Logged In</title>
</head>
<body>
  <!--<nav class="navbar navbar-inverse">
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
            <li><a href="main.php"><span class="glyphicon glyphicon-dashboard"></span> Profile</a></li>
            <li><a href="books.php"><span class="glyphicon glyphicon-book"></span> Books</a></li>
            <li><a href="score.php"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Result</a></li>
            <li><a href="result_analysis.php"><span class="glyphicon glyphicon-signal"></span> Analyse</a></li>
            <li><a href="bot.php"><span class="glyphicon glyphicon-pushpin"></span> Library</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>-->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <center>
        <img src="images\logo.png" width="40" height="40" style="margin-top:5rem"></center>
        <div class="media-body">
          <h3 class="text-center" style="color: orange;"> Navigation Bar </h3>

        </div>
      </div>
    </div>

    <ul class="nav flex-column mb-0">
      <li>
         <a href="https://www.linkedin.com/in/preetyakanksha" target="_blank" class="link"><span class="glyphicon glyphicon-phone"></span> Contact</a>
      </li>
      <li class="nav-item">
         <a href="main.php" class="link"><span class="glyphicon glyphicon-dashboard"></span> Profile</a>
      </li>
      <li class="nav-item">
         <a href="books.php" class="link"><span class="glyphicon glyphicon-book"></span> Books</a>
      </li>
      <li class="nav-item">
         <a href="score.php" class="link"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Result</a>
      </li>
      <li class="nav-item">
         <a href="result_analysis.php" class="link"><span class="glyphicon glyphicon-signal"></span> Analyse</a>
      </li>
      <li class="nav-item">
         <a href="bot.php" class="link"><span class="glyphicon glyphicon-pushpin"></span> Library</a>
      </li>
      <li class="nav-item">
         <a href="logout.php" class="link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
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
      <h1 style="color: blue; font-weight: bolder; text-transform:uppercase;">HELLO <?php echo $_SESSION['name']; ?></h1>
    </div>
    <div class="page">
    <div class="container">
      <div class="row" style="margin-top:4rem;">
      <div class="col-xs-12 col-md-6" style="margin-top:1rem">
        <div class="box">What's In Here!</div>
        <div style="font-size:2rem; margin-top: 1rem; font-style: italic; ">
        <li>Check your results</li>
        <li>Get your Improvement Graph</li>
        <li>Get to know about the books related to your curriculum</li>
        <li>Know how to create your own resume</li>
        <li>Check the available books in the college library</li><br><br>
        <p style="font-weight: bold;text-align: justify;">This portal is a common solution tool that is designed to track, maintain and manage all the data associated with students such as their grades, improvement record and profile information.<br>
        This platform also allows students to search for the available books in the library of the organization.</p>
      </div>
      </div>
      <div class="col-xs-12 col-md-6" style="font-family: JuneBug ;">
        <img src="images\student.png" class="img-responsive">
      </div>
    </div>
    <div class="row" style="margin: 15rem 0 6rem 0">
      <center><a href="form.php"><button class="btn btn-info" style="width: 45rem; height:5rem ;font-weight: bolder; font-size: 3rem; border-style: ridge;">Create Your Own Resume</button></a><br><br></center>
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