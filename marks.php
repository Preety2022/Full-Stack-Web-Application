<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
  $msg = mysqli_real_escape_string($con,$_POST['msg']);
  $query = "SELECT * from results where roll='$msg'";
  $res= mysqli_query($con,$query);
 if(mysqli_num_rows($res)>0){
  $row= mysqli_fetch_assoc($res);
  echo $row['cgpa'];
 }
  else{
    echo 'Invalid Roll_no';
  }
?>