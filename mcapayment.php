<?php
require 'connect.php';
if(isset($_POST['payment_id']) && isset($_POST['email'])){
	$email = $_POST['email'];
	$payment_id = $_POST['payment_id'];
	$payment_detail = date('y-m-d h:i:s');
	$query1= "SELECT * FROM admission_mca WHERE email='$email'";
	$data1 = mysqli_query($con,$query1);
	$rowcount1=mysqli_num_rows($data1);
	if($rowcount1==true){
	$users_registration_query="UPDATE admission_mca set payment_status='complete',payment_id='$payment_id',payment_detail='$payment_detail' WHERE email='$email'";
	$users_registration_submit=mysqli_query($con,$users_registration_query);
}
else{
	echo "<p style='color:red ;font-size:32px'>Please Register yourself!!!</p>";
}
}
?>