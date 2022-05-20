<?php
require 'connect.php';
$email= $_POST['email'];
$pass= $_POST['password'];
$query = "SELECT * FROM admin WHERE email='$email' and password='$pass' ";

$data1 = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data1);
if($rowcount==true){
    $row= mysqli_fetch_assoc($data1);
    session_start();
    $_SESSION['adminemail'] = $row['Email'];
    header("location: admin.php");
    /*if(isset($_SESSION['adminemail']))
    echo "" . $_SESSION["adminemail"] . ".<br>";*/
    }
else{
    echo "<p style='color:red ;font-size:32px'>**Invalid Credentials</p>Please go back and Register";
    }
?>