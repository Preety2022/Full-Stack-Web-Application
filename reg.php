<?php
require 'connect.php';
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$pass= password_hash($password, PASSWORD_BCRYPT);
$contact = $_POST['contact'];
$city= $_POST['city'];
$address= $_POST['address'];
$postal_code= $_POST['postal_code'];
$state= $_POST['state'];
$country= $_POST['country'];
$gender=$_POST['gender'];
$roll =$_POST['roll'];
$batch=$_POST['batch'];
$dob=$_POST['dob'];
$query= "SELECT * FROM reg WHERE email='$email'";
$data = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data);
if($rowcount!=true){
$users_registration_query="INSERT INTO reg(name,email,password,contact,city,address,postal_code,state,country,gender,roll,batch,dob)values('$name','$email','$pass','$contact','$city','$address','$postal_code','$state','$country','$gender','$roll','$batch','$dob')";
$users_registration_submit=mysqli_query($con,$users_registration_query);  
	header("Location:login.php");  } 
else{
	echo"<p style='color:red ;font-size:32px'>Email-id already exists!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>Please go back to previous page and use another Email-id or LOGIN ";
}
?>