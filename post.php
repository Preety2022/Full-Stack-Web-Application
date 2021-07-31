<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
$msg = mysqli_real_escape_string($con,$_POST['msg']);
$query1= "SELECT bot_end from conversation where user_end like '%$msg%'";
$res = mysqli_query($con,$query1);
if(mysqli_num_rows($res)>0){
    $row= mysqli_fetch_assoc($res);
    echo $row['bot_end'];
}
else
{
  echo "Sorry, I don't understand what you are saying!";
  echo '<br><a href="https://www.google.com" target="_blank">Visit Google<a>';
} 
?>