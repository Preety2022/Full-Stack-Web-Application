<?php
require 'connect.php';
$email= $_POST['email'];
$pass= $_POST['password'];
$query = "SELECT * FROM reg WHERE email='$email' ";
$data1 = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data1);
if($rowcount==true){
    $row= mysqli_fetch_assoc($data1);
    $verify= password_verify($pass, $row['password']);
    if($verify==1){




/*$query1= "SELECT * FROM reg WHERE email='$email' AND password='$password'";
$data1 = mysqli_query($con,$query1);
$rowcount1=mysqli_num_rows($data1);
 if($rowcount1==true){*/
            session_start();
            /*$row=mysqli_fetch_array($data1);*/
            $_SESSION['email']=$row['email'];
            $_SESSION['name']=$row['name'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['contact']=$row['contact'];
            $_SESSION['state']=$row['state'];
            $_SESSION['roll']=$row['roll'];
            $_SESSION['batch']=$row['batch'];
            header("Location:dashboard.php");
          }
     else
    echo "<script>alert('INVALID CREDENTIALS!!!')</script>";}
?>