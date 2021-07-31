<?php
require 'connect.php';
$email= $_POST['email'];
$password = $_POST['password'];
$pass= password_hash($password, PASSWORD_BCRYPT);
$query1= "SELECT * FROM reg WHERE email='$email'";
$data1 = mysqli_query($con,$query1);
$rowcount1=mysqli_num_rows($data1);
if($rowcount1==true){
  $pass_query= "UPDATE reg SET password='$pass' WHERE`email`='$email'";
  $pass_submit=mysqli_query($con,$pass_query);
  header("Location:login.php");}
else
  echo "<p style='color:red ;font-size:32px'>Please Register yourself!!!</p>";
?>