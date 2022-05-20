<?php
require 'connect.php';
if(isset($_POST['payment_id']) && isset($_POST['email']) && isset($_POST['year'])){
	$email = $_POST['email'];
	$year = $_POST['year'];
	$payment_id = $_POST['payment_id'];
	$date = date_default_timezone_set('Asia/Kolkata');
	$payment_detail = date('y-m-d h:i:s');

	if($year == 1)
	{
		$query1= "SELECT * FROM fee_1 WHERE email='$email'";
		$data1 = mysqli_query($con,$query1);
		$rowcount1=mysqli_num_rows($data1);
		if($rowcount1==true){
		$users_transaction_query="UPDATE fee_1 set payment_status='complete',payment_id='$payment_id',payment_detail='$payment_detail' WHERE email='$email'";
		$users_transaction_submit=mysqli_query($con,$users_transaction_query);
		if($users_transaction_submit==1){
		    $subject = "Transaction Successful";
		    $body = "Hi".",\n\nYour Fee Payment of amount INR 81,000 was Successfully completed.\n\nYour unique payment ID is="." ".$payment_id;
		    $me = "From: preetyakanksha1@gmail.com";
		    if(mail($email, $subject, $body, $me)){
		        echo "Registration Successful \n Login credentials sent at your mail";
		    }
		    }
		    else
		    {
		        echo"<p style='color:red ;font-size:32px'>Invalid Payment</p>";
		   }
		}
		else{
			echo "<p style='color:red ;font-size:32px'>You are logged out.</p>";
		}
	}


	if($year == 2)
	{
		$query1= "SELECT * FROM fee_2 WHERE email='$email'";
		$data1 = mysqli_query($con,$query1);
		$rowcount1=mysqli_num_rows($data1);
		if($rowcount1==true){
		$users_transaction_query="UPDATE fee_2 set payment_status='complete',payment_id='$payment_id',payment_detail='$payment_detail' WHERE email='$email'";
		$users_transaction_submit=mysqli_query($con,$users_transaction_query);
		if($users_transaction_submit==1){
		    $subject = "Transaction Successful";
		    $body = "Hi".",\n\nYour Fee Payment of amount INR 81,000 was Successfully completed.\n\nYour unique payment ID is="." ".$payment_id;
		    $me = "From: preetyakanksha1@gmail.com";
		    if(mail($email, $subject, $body, $me)){
		        echo "Registration Successful \n Login credentials sent at your mail";
		    }
		    }
		    else
		    {
		        echo"<p style='color:red ;font-size:32px'>Invalid Payment</p>";
		   }
		}
		else{
			echo "<p style='color:red ;font-size:32px'>You are logged out.</p>";
		}
	}


	if($year == 3)
	{
		$query1= "SELECT * FROM fee_3 WHERE email='$email'";
		$data1 = mysqli_query($con,$query1);
		$rowcount1=mysqli_num_rows($data1);
		if($rowcount1==true){
		$users_transaction_query="UPDATE fee_3 set payment_status='complete',payment_id='$payment_id',payment_detail='$payment_detail' WHERE email='$email'";
		$users_transaction_submit=mysqli_query($con,$users_transaction_query);
		if($users_transaction_submit==1){
		    $subject = "Transaction Successful";
		    $body = "Hi".",\n\nYour Fee Payment of amount INR 81,000 was Successfully completed.\n\nYour unique payment ID is="." ".$payment_id;
		    $me = "From: preetyakanksha1@gmail.com";
		    if(mail($email, $subject, $body, $me)){
		        echo "Registration Successful \n Login credentials sent at your mail";
		    }
		    }
		    else
		    {
		        echo"<p style='color:red ;font-size:32px'>Invalid Payment</p>";
		   }
		}
		else{
			echo "<p style='color:red ;font-size:32px'>You are logged out.</p>";
		}
	}


	if($year == 4)
	{
		$query1= "SELECT * FROM fee_4 WHERE email='$email'";
		$data1 = mysqli_query($con,$query1);
		$rowcount1=mysqli_num_rows($data1);
		if($rowcount1==true){
		$users_transaction_query="UPDATE fee_4 set payment_status='complete',payment_id='$payment_id',payment_detail='$payment_detail' WHERE email='$email'";
		$users_transaction_submit=mysqli_query($con,$users_transaction_query);
		if($users_transaction_submit==1){
		    $subject = "Transaction Successful";
		    $body = "Hi".",\n\nYour Fee Payment of amount INR 81,000 was Successfully completed.\n\nYour unique payment ID is="." ".$payment_id;
		    $me = "From: preetyakanksha1@gmail.com";
		    if(mail($email, $subject, $body, $me)){
		        echo "Registration Successful \n Login credentials sent at your mail";
		    }
		    }
		    else
		    {
		        echo"<p style='color:red ;font-size:32px'>Invalid Payment</p>";
		   }
		}
		else{
			echo "<p style='color:red ;font-size:32px'>You are logged out.</p>";
		}
	}



}
?>