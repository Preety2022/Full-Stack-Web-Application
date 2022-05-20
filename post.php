<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
$sub = mysqli_real_escape_string($con,$_POST['msg']);
$query1= "SELECT * from conversation where user_end like '%$sub%' ";
$res = mysqli_query($con,$query1);

if(mysqli_num_rows($res)>0 ){
    $row= mysqli_fetch_assoc($res);
    echo $row['bot_end']."|".$row['book1']."|".$row['book2']."|".$row['book3']."|".$row['book4']."|".$row['book5']."|".$row['book6']."|".$row['book7']."|".$row['book8']."|".$row['book9']."|".$row['book10']."|".$row['book11'];
}

else
{
  echo "Sorry, I don't understand what you are saying!";
  echo '<br><a href="https://www.google.com" target="_blank">Visit Google<a>';
} 
?>
