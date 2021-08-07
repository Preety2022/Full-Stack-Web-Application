<?php
require 'connect.php';
$name = $_POST['namem'];
$fname = $_POST['fnamem'];
$mname = $_POST['mnamem'];
$dob = $_POST['dobm'];
$native = $_POST['nativem'];
$address = $_POST['addressm'];
$permanent = $_POST['permanentm'];
$contact = $_POST['contactm'];
$acontact = $_POST['acontactm'];
$mail = $_POST['mailm'];
$aadhar = $_POST['aadharm'];
$identify = $_POST['identifym'];
$category = $_POST['categorym'];
$ward = $_POST['wardm'];
$centre = $_POST['centrem'];
$date = $_POST['datem'];
$twelve = $_POST['twelvem'];
$clg = $_POST['clgm'];
$board = $_POST['boardm'];
$pass = $_POST['passm'];
$marks = $_POST['marksm'];
$dclg = $_POST['dclgm'];
$dboard = $_POST['dboardm'];
$dpass = $_POST['dpassm'];
$dmarks = $_POST['dmarksm'];
$profile =$_FILES['profilem']['name'];
$pdf=$_FILES['pdfm']['name'];
$payment_status = 'pending';

$query= "SELECT * FROM admission_mca WHERE email='$mail'";
$data = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data);
if($rowcount!=true){
$users_registration_query="INSERT INTO `admission_mca`(`name`, `mother`, `father`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`,`payment_status`) VALUES ('$name','$mname','$fname','$dob','$identify','$category','$ward','$centre','$profile' ,'$twelve','$clg','$board','$pass','$marks','$dclg','$dboard','$dpass','$dmarks','$native','$address','$permanent','$contact','$acontact','$mail','$aadhar','$date','$pdf','$payment_status')";
$users_registration_submit=mysqli_query($con,$users_registration_query);
if($users_registration_submit==1){ 
move_uploaded_file($_FILES['profilem']['tmp_name'], "profile1/$profile");
move_uploaded_file($_FILES['pdfm']['tmp_name'], "files1/$pdf"); 
header("Location:mcapay.php");
 } 
}
else{
	echo"<p style='color:red ;font-size:32px'>Email-id already exists!!!!</p>";
}
?>