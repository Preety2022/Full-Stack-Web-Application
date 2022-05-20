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
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style3.css">
   <title>Score</title>
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
            <img src="images\logo.jpg" class="logo">
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
   <div class="container">
       <div class="row">

        <div class="col-xs-12 col-md-12">
        <h1 style="text-align:center; font-family: JuneBug; font-weight: bolder; color: #20b2aa; font-size: 7rem">TRANSACTION STATUS</h1>
         <center>
          <img src="images\analytics.png"  style="max-height: 120px; margin-bottom: 3rem;"><br>
          <!--<input type="text" name="roll" id="year" placeholder="Enter Current Year" style="width:20rem; height: 5rem; border-style:outset; font-size: 2rem; font-weight: bold;">-->
          <select name="year" id= "year" class="inputbox" style=" margin-bottom: 20px; width: 32rem; height: 5rem; font-size: 2rem; font-weight: bold; border-style: double;" required>
          <option value="1" >First Year</option>
          <option value="2">Second Year</option>
          <option value="3" >Third Year</option>
          <option value="4" >Fourth Year</option></select>
          <br><br>
          <input type="text" name="roll" id="txt" placeholder="Enter University Roll" style="width:22rem; height: 5rem; border-style:outset; font-size: 2rem; font-weight: bold;">
          <button class="btn btn-primary btn-lg" onclick="data_cgpa()">Submit</button>

          <div id="list">   
             
          </div>
        </center>
        </div>
   </div>
</div>
  <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
  <script>
    function data_cgpa() {
      var msg = jQuery('#txt').val(); 
      var year = jQuery('#year').val(); 
      if(msg=='' || year==''){
      alert('Please give your input');
     }
     if(msg)
     {
      jQuery.ajax({
        url:'fee_update_script.php',              
        type: 'post',
        data: 'msg=' +msg+'&year=' +year,
        success: function(output){
          //var result = $.parseJSON(output);
          var result = output.split("|");
          var input = '<div class="res">'+result[0]+'</div>';
          var input1 = '<div class="res">'+result[1]+'</div>';
          var input2 = '<div class="res">'+result[2]+'</div>';
          jQuery('#list').prepend(input);
          jQuery('#list').prepend(input1);
          jQuery('#list').prepend(input2);
        }
      });
     }
  }
  </script>
</body>
</html>