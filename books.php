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
  <title>BOOKS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style3.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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



   <!--Open library : https://openlibrary.org/developers/api-->
   <!--Open Library website: https://openlibrary.org/ -->

   
  <div class="container">
  <!--
   <?php 
     $data =file_get_contents('https://www.googleapis.com/books/v1/volumes?q=dbms');
     $corona = json_decode($data);                                                    #decode 
     echo "<pre>";
     print_r($data);
   ?>-->
     <center>
      <h1 style="color: #20b2aa ; font-size: 5rem; margin-bottom: 4rem; font-weight:bolder;"> SEARCH TOPIC</h1>
      <input type="text" name="input" id="books" placeholder="Subject Name" style="width:20rem; height: 5rem; border-style:outset; font-size: 2rem; font-weight: bold;">
      <button id="search" class="btn btn-success btn-lg" onclick="fetch_data()">Search</button>
      <button id="refresh" class="btn btn-warning btn-md" onclick="refresh()">Refresh Page</button>
      <div class="row" style="margin-top: 4rem">
      <div class="table col-xs-12 col-md-10 ">
       <table class="table table-hover table-bordered text-center" cellpadding="5px" cellspacing="10px" id="tab" style="box-shadow: 10px 5px 10px 5px rgba(255, 255, 255, 0.7);display: none;">
        <video height="400" width="600" loop autoplay muted id="vid">
           <source src="images\lib.mp4">
        </video>
         <tr>
           <th> Title</th>
           <th>Author Name</th>
           <th>Publisher</th>
           <th>Know More</th>
         </tr>
       </table>
      </div>
      </div>
      </center>
  </div>

 <div class="footer">
    <p>DESIGNED BY PREETY AKANKSHA<br>
    Contact: akankshapreety4545@gmail.com</p>
  </div>
  <script type="text/javascript" src="script.js"></script>
  <script>
    function fetch_data(){
      jQuery('#vid').hide();
      var query= jQuery('#books').val();
      if(query==''){
      alert('Please give your input');
     }
      else{
        jQuery('#tab').show();
        $.get("https://www.googleapis.com/books/v1/volumes?q=" +query,
        function (data){       //anonymous function, data as parameteris passed which fetches the data from the url we have passed
          
          var tab = document.getElementById('tab');
          if(data['items'].length==0)
            alert('Sorry, No Book matches your input');
          else{
          for(var i=1; i<(data['items'].length); i++){
            var x = tab.insertRow(i);               //row is created
            //cell created
            x.insertCell(0);                    // 0 is for index no
            tab.rows[i].cells[0].innerHTML = data['items'][i-1]['volumeInfo']['title'];
            tab.rows[i].cells[0].style.background= '#20b2aa';
            tab.rows[i].cells[0].style.color = "white";

            x.insertCell(1);
            tab.rows[i].cells[1].innerHTML = data['items'][i-1]['volumeInfo']['authors'];
            tab.rows[i].cells[1].style.background = "#32527b";
            tab.rows[i].cells[1].style.color = "white";


            x.insertCell(2);
            tab.rows[i].cells[2].innerHTML = data['items'][i-1]['volumeInfo']['publisher'];
            tab.rows[i].cells[2].style.background = "#20b2aa";
            tab.rows[i].cells[2].style.color = "white";

            x.insertCell(3);
            tab.rows[i].cells[3].innerHTML =' <a href= '+  data['items'][i-1]['volumeInfo']['infoLink'] +' style="color:#ffffff;" target="_blank">Click Here</a>';
            tab.rows[i].cells[3].style.background = "#32527b";
            tab.rows[i].cells[3].style.color = "white";

          }
          jQuery('#books').val('');
        }
        }
        );
    }
    
    }
    function refresh() {
      location.reload();
    }
  </script>
</body>
</html>