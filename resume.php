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
   <link rel="stylesheet" type="text/css" href="stylesheets\style_resume.css">
   <title>Resume</title>
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
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <div class="container ">
    <div class="col-xs-12 col-md-12">
    <H1 style="font-weight: bolder; text-transform: uppercase; color: #ffffff;" class="text-center">Why to focus on creating resume?</H1>
    <center><img src="images\res.jpg" class="img-responsive" style="max-height: 400px;"></center>
    <p style="font-size:2rem; margin-top: 1rem; font-style: italic;font-weight: bold;text-align: justify; margin-bottom: 10rem;">Resume writing is important for making the transition from academics to the workforce. When you're in learning mode, you're focused on the theory that underlies the kind of work you're interested in. However, once you complete your education, you must focus on the practical application of your skills. This is true for everyone, from high school graduates to students receiving post-graduate university degrees, and every type of schooling in between. Your ability to transfer learning to actual demonstrations of your skills and knowledge in a work environment should be part of your description of your capabilities and qualifications in a resume.<br>A well-written resume is proof that you understand how your tasks and responsibilities fit into the overall goals of the organization for which you work.<br><br>Your resume often is a reflection of your self-confidence. People who struggle with writing their own resumes must rely on friends and professional resume writers to pull together a document that makes them look good on paper. If you don't have confidence in your skills and if you're unable to showcase your qualifications, writing a resume can be quite a challenge. If you aren't sure you can write a good resume, there is nothing wrong with getting help. Sending in a letter-perfect resume will give you more confidence than trying to get by on your own uncertain efforts.</p>
    </div>
  </div>

</body>
</html>