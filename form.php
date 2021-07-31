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
   <title>RESUME</title>
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
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <h1 class="text-center" style="color: #20b2aa; font-weight: bolder; margin-bottom: 6rem;">CREATE YOUR RESUME</h1>
  <div class="container">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-2 col-md-offset-2 col-md-2 img_info">
          <img src="images\user.png" alt="User Information" style="height: auto; width: 100%; " onclick="userpro()">
          <p style="color: #ffffff; font-weight:bolder; font-size: 2rem; margin-top: 1rem;" class="text-center">STEP 1</p>
        </div>
        <div class="col-xs-offset-1 col-xs-2 col-md-offset-1 col-md-2 img_info">
          <img src="images\skill.png" alt="skills" style="height: auto; width: 100%;" onclick="more_info()">
          <p style="color: #ffffff; font-weight:bolder; font-size: 2rem; margin-top: 1rem;" class="text-center" >STEP 2</p>
        </div>  
        <div class="col-xs-offset-1 col-xs-2 col-md-offset-1 col-md-2 img_info">
          <img src="images\create.png" alt="Create" style="height: auto; width: 100%;" onclick="cv()">
          <p style="color: #ffffff; font-weight:bolder; font-size: 2rem; margin-top: 1rem;" class="text-center">STEP 3</p>
        </div>  
    </div>
  </div>


  <div class="container" id="fillform" style="margin-top:10rem">
    <div class="row">
    <div class="col-xs-12 col-md-12 des">
      <div class="form-group">
        <label style="font-size:1.7rem">NAME</label> <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name.." required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">YOUR CURRENT ROLE</label> <input type="text" name="role" id="role" class="form-control" placeholder="Student/Intern/Developer.." required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">E-MAIL</label> <input type="email" name="email" id="email" class="form-control" placeholder="Enter your official mail" required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">CONTACT</label> <input type="text" name="contact" id="contact" class="form-control" placeholder="Your WhatsApp no" pattern="[0-9]{10}" required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">LinkedIn URL</label> <input type="text" name="url" id="url" class="form-control" placeholder="LinkedIn ID" required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">OBJECTIVE</label> <textarea id="objective" name="object" class="form-control" placeholder="Explain Objective in brief" required rows="7"></textarea>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">GITHUB LINK</label> <input type="text" name="git" id="git" class="form-control" placeholder="github profile" required>
      </div>
      <div class="form-group">
        <label style="font-size:1.7rem">EDUCATION QUALIFICATION</label> <input type="text" name="edu" id="edu" class="form-control education" placeholder="Academic Qualification, Year of Completion, cgpa/percentage" required>
      </div>
      <div class="list_edu">

      </div>
      <button class="btn btn-info btn-md" id="edu_btn" onclick="a()">MORE</button><br>
      </div>
    </div>
  </div>


  <!-- More Information(next page)-->

  <div class="container" id="next_info" style="margin-top:10rem; display:none">
    <div class="row">
    <div class="col-xs-12 col-md-12 des">
      <!--<div class="form-group">
      <label style="font-size:1.7rem">WORK EXPERIENCE</label> <textarea id="work" class="form-control" placeholder="Can include your internship experience as well" rows="4"></textarea>
      </div>
      <div class="list_work">

      </div>
      <button class="btn btn-info btn-md" id="work_btn" onclick="b()">MORE</button><br>-->
      <div class="form-group">
        <label style="font-size:1.7rem">SKILLS</label> <input type="text" name="skill" id="skill" class="form-control skillset" placeholder="Your Skill-Set">
      </div>
      <div class="list_skill">

      </div>
      <button class="btn btn-info btn-md" id="skill_btn" onclick="c()">MORE</button><br>
      <div class="form-group">
        <label style="font-size:1.7rem">PROJECTS</label> <textarea type="text" name="project" id="project" class="form-control project" placeholder="Your Projects..." rows="4"></textarea>
      </div>
      <div class="list_pro">

      </div>
      <button class="btn btn-info btn-md" id="pro_btn" onclick="d()">MORE</button><br>
      <div class="form-group">
        <label style="font-size:1.7rem">CERIFICATIONS AND ACCOMPLISHMENTS</label> <textarea name="certificate" id="certify" class="form-control certificate" placeholder="Mention your certificates" rows="4"></textarea>
      </div>
      <div class="list_cert">

      </div>
      <button class="btn btn-info btn-md" id="cert_btn" onclick="e()">MORE</button><br>
      <div class="form-group">
        <label style="font-size:1.7rem">LANGUAGES KNOWN</label> <input type="text" name="lang" id="lang" class="form-control language" placeholder="Languages known including your native language" required>
      </div>
      <div class="list_lang">

      </div>
      <button class="btn btn-info btn-md" id="lang_btn" onclick="add_more()">MORE</button><br>
      </div>
      </div>
    </div>


  <!--Resume container-->

  <div class="container" id="creater" style="margin-bottom: 7rem ;display: none;">
    <div class="row" >
    <div class=" col-xs-12 col-md-offset-2 col-md-8" style="background-color:#ffffff ; padding-top: 3rem;padding-bottom: 3rem; " id="createp">
      <div class=" text-center" style="margin-bottom: 3rem;">
        <h1 class="profile" id="namefilled"></h1>
        <h3><u id="rolefilled"></u></h3>
      </div>
      <div class="col-md-4"><br>
        <label>Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><p id="mailfilled"></p><br>
        <label>Contact &nbsp&nbsp&nbsp&nbsp&nbsp</label><p id="contactfilled"></p><br>
        <label>LinkedIn &nbsp&nbsp&nbsp&nbsp</label><p id="urlfilled"></p><br>
        <label>GitHub &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><p id="gitfilled"></p><br><br>
      </div>

      <div class="col-md-8" style="margin-top: 1.5rem">
        <label>OBJECTIVE</label><div style="text-align: justify;" id="objectfilled"></div><br>
        <label>SKILLS</label><div style="text-align: justify;" >
          <ul id="skillfilled">
            
          </ul>
        </div><br>
        <!--<label>WORK EXPERIENCE</label><div style="text-align: justify;">
          <ul id="workfilled"> </ul></div><br>-->
        <label>EDUCATION QUALIFICATION</label><div style="text-align: justify;">
          <table class="table">
            <tr>
              <th><ul id="edufilled"></ul></th>
            </tr>
          </table>
        </div><br>
        <label>CERTIFICATIONS & ACHIEVEMENTS</label><div style="text-align: justify;">
          <ul id="certfilled"></ul>
        </div><br>
        <label>PROJECTS</label><div style="text-align: justify;" >
          <ul id="profilled"></ul>
        </div><br>
        <label>LANGUAGES KNOWN</label><div style="text-align: justify;">
          <ul id="langfilled"></ul>
        </div><br>

      </div>

    </div>
  </div>
      <div style="margin-top: 3rem ; margin-bottom: 8rem;" class="text-center">
        <button class="btn btn-danger btn-lg" id="create" style="border-style: ridge;" onclick="printres('createp')">PRINT</button><br>
      </div>
  </div>

  <script src="scripts/script.js"></script>
<body>
</html