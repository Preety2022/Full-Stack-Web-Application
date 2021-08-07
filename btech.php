<?php
require 'connect.php';
$name = $_POST['name'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dob = $_POST['dob'];
$native = $_POST['native'];
$address = $_POST['address'];
$permanent = $_POST['permanent'];
$contact = $_POST['contact'];
$acontact = $_POST['acontact'];
$mail = $_POST['mail'];
$aadhar = $_POST['aadhar'];
$identify = $_POST['identify'];
$category = $_POST['category'];
$check = $_POST['check'];
$ward = $_POST['ward'];
$centre = $_POST['centre'];
$date = $_POST['date'];
$twelve = $_POST['twelve'];
$clg = $_POST['clg'];
$board = $_POST['board'];
$pass = $_POST['pass'];
$marks = $_POST['marks'];
$diploma = $_POST['diploma'];
$dclg = $_POST['dclg'];
$dboard = $_POST['dboard'];
$dpass = $_POST['dpass'];
$dmarks = $_POST['dmarks'];
$profile =$_FILES['profile']['name'];
$pdf=$_FILES['pdf']['name'];
$payment_status = 'pending';

$query= "SELECT * FROM admission_b WHERE email='$mail'";
$data = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data);
if($rowcount!=true){
$users_registration_query="INSERT INTO `admission_b`(`name`, `mother`, `father`, `apply_for`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dequivalent`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`,`payment_status`) VALUES ('$name','$mname','$fname','$check','$dob','$identify','$category','$ward','$centre','$profile' ,'$twelve','$clg','$board','$pass','$marks','$diploma','$dclg','$dboard','$dpass','$dmarks','$native','$address','$permanent','$contact','$acontact','$mail','$aadhar','$date','$pdf','$payment_status')";
$users_registration_submit=mysqli_query($con,$users_registration_query);  
if($users_registration_submit==1){ 
move_uploaded_file($_FILES['profile']['tmp_name'], "profile/$profile");
move_uploaded_file($_FILES['pdf']['tmp_name'], "files/$pdf");
header("Location:btechpay.php");  }
 } 
else{
	echo"<p style='color:red ;font-size:32px'>Email-id already exists!!!!</p>";
}
?>