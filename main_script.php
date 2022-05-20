<?php 
require 'connect.php';
    $roll = $_POST['roll'];
    $query = "SELECT * FROM reg WHERE univ_roll='$roll' ";
    $data1 = mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($data1);
    if($rowcount==true){
    $row= mysqli_fetch_assoc($data1);
        session_start();
        $_SESSION['studentemail']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['dob']=$row['dob'];
        $_SESSION['univ_roll']=$row['univ_roll'];
        $_SESSION['contact']=$row['contact'];
        $_SESSION['state']=$row['state'];
        $_SESSION['roll']=$row['roll'];
        $_SESSION['batch']=$row['batch'];
        $_SESSION['image']=$row['image'];
        $_SESSION['reg_no']=$row['reg_no'];
        //header("Location:dashboard.php");
          }
  else
  {echo "<p style='color:red ;font-size:32px'>**Invalid Password</p>";}
?>