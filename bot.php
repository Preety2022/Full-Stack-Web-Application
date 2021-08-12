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
   <link rel="stylesheet" type="text/css" href="bott\style.css">
      <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');</style>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>LMS</title>
</head>
<body>
<div class="container">
	<div class="bot">
		<div class="user">
			<img src="bott\programming.png" alt="Bot">
			<div class="info">
				<h2 style="font-weight: bolder;">VIRTUAL LIBRARY</h2>
			</div>
		</div>
			<div class="chat">
      <center><h3 style="font-weight:bold; font-family:JuneBug;color: deepskyblue;">Interface for user smooth interaction.</h3></center>
			<div class="userchat">Hello!<br>Please enter the subject name</div>
      <div class="messages-list">
      	
      </div>

      </div>

			<div class="input">
			<input type="text" placeholder="Enter Message" id="txt">
			<button class="btn" type="submit" onclick="send()">
				<img src="bott\send.png" alt="send">
			</button>
		</div>
	</div>
	<div class="chatbot">
		<img src="bott\robot.png" alt="Bot">	
	</div>
</div>

   <script type="text/javascript" src="bott\script.js"></script>

   <script type="text/javascript">
   	
   	function send(){
     var msg = jQuery('#txt').val(); 
     if(msg==''){
     	alert('Please give your input');
     }
     else{
     var input='<div class="mychat">'+msg+'</div>';
     jQuery('.messages-list').append(input);
     jQuery('#txt').val('');}



     if(msg)
     {
     	jQuery.ajax({
     		url:'post.php',                 //get bot message
     		type: 'post',
     		data: 'msg=' +msg,
     		success: function(result){
          var input = '<div class="userchat">'+result+'</div>';
          jQuery(".messages-list").append(input);
          jQuery('.chat').scrollTop(jQuery('.chat')[0].scrollHeight);

          
        }
     	});
     }
   }
   </script>
</body>
</html>