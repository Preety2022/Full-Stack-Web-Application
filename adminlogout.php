<?php 
session_start();

if(isset($_SESSION['adminemail']))
{
  session_destroy();
  header('location: index.php');
}
else{
  header('location: admin.php');
}
?>