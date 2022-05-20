<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['adminemail']))
{
  header('location: index.php');
}
  $msg = mysqli_real_escape_string($con,$_POST['msg']);
  $year = mysqli_real_escape_string($con,$_POST['year']);
  if($year == 1)
  {
  $query = "SELECT * from fee_1 where roll='$msg'";
  $res= mysqli_query($con,$query);
  if(mysqli_num_rows($res)>0){
  $row= mysqli_fetch_assoc($res);
  //echo $row['payment_status'].\n$row['payment_id'].\n$row['payment_detail']];
  //echo json_encode(array($row['payment_status'],row['payment_id'],row['payment_detail']))
  echo $row['payment_status']."|".$row['payment_id']."|".$row['payment_detail'];
 }
  else{
    echo 'Invalid Roll';
  }
}

 if($year == 2)
  {
  $query = "SELECT * from fee_2 where roll='$msg'";
  $res= mysqli_query($con,$query);
  if(mysqli_num_rows($res)>0){
  $row= mysqli_fetch_assoc($res);
  echo $row['payment_status']."|".$row['payment_id']."|".$row['payment_detail'];
 }
  else{
    echo 'Invalid Roll';
  }
}

if($year == 3)
  {
  $query = "SELECT * from fee_3 where roll='$msg'";
  $res= mysqli_query($con,$query);
  if(mysqli_num_rows($res)>0){
  $row= mysqli_fetch_assoc($res);
  echo $row['payment_status']."|".$row['payment_id']."|".$row['payment_detail'];
 }
  else{
    echo 'Invalid Roll';
  }
}

if($year == 4)
  {
  $query = "SELECT * from fee_4 where roll='$msg'";
  $res= mysqli_query($con,$query);
  if(mysqli_num_rows($res)>0){
  $row= mysqli_fetch_assoc($res);
  echo $row['payment_status']."|".$row['payment_id']."|".$row['payment_detail'];
 }
  else{
    echo 'Invalid Roll';
  }
}

?>