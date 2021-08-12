<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
$roll= $_SESSION['roll'];
 /*for dynamic chart*/
  $query = "SELECT * from results where roll='$roll'";
  $res= mysqli_query($con,$query);
  $result ='';
  while($row=mysqli_fetch_array($res)){
    $result .="{roll: '".$row["roll"]."' , semester1: '".$row["sem1"]."' , semester2: '".$row["sem2"]."', semester3: '".$row["sem3"]."' , semester4: '".$row["sem4"]."', semester5: '".$row["sem5"]."', semester6: '".$row["sem6"]."', semester7: '".$row["sem7"]."',semester8: '".$row["sem8"]."' }, ";
  }
    $result = substr($result, 0, -2);
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
   <style>
     body{
      background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
     }
   </style>
   <title>Record</title>
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
            <li><a href="dashboard.php"><span class="glyphicon glyphicon-education"></span> Dashboard</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   	    	</ul>
   	    </div>
   	</div>
   </nav>
   <div class="container">
       <div class="row">
        <div class="col-xs-10 col-md-offset-3 col-md-6">
        <h1 style="text-align:center; font-family: JuneBug; font-weight: bolder; color: #ffffff; font-size: 7rem">Improvement Graph</h1>
         <center>
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

    Morris.Bar({
      element: 'list',
      data: [<?php echo $result; ?>],
      xkey: 'roll',
      ykeys: ['semester1','semester2','semester3','semester4','semester5','semester6','semester7','semester8'],
      labels: ['semester1','semester2','semester3','semester4','semester5','semester6','semester7','semester8'],
      hideHover:'auto',
    });
  </script>
</body>
</html>