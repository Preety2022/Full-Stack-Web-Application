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
        session_start();
        /*$row=mysqli_fetch_array($data1);*/
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['dob']=$row['dob'];
        $_SESSION['univ_roll']=$row['univ_roll'];
        $_SESSION['contact']=$row['contact'];
        $_SESSION['state']=$row['state'];
        $_SESSION['roll']=$row['roll'];
        $_SESSION['batch']=$row['batch'];
        $_SESSION['image']=$row['image'];
        $_SESSION['reg_no']=$row['reg_no'];
        header("Location:dashboard.php");
          }
    else
    {echo "<p style='color:red ;font-size:32px'>**Invalid Password</p>";}
}
else{
    echo "<p style='color:red ;font-size:32px'>**Invalid Credentials</p>Please go back and Register";
}
?>