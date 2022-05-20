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
$roll =$_POST['roll'];
$uniroll =$_POST['uniroll'];
$batch=$_POST['batch'];
$reg_no=$_POST['reg_no'];
$profile =addslashes(file_get_contents($_FILES['image']['tmp_name']));

$dob=$_POST['dob'];
$query= "SELECT * FROM reg WHERE email='$email'";
$data = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data);
if($rowcount!=true){
$users_registration_query="INSERT INTO reg(name,email,password,contact,city,address,postal_code,state,country,univ_roll,roll,batch,dob,reg_no,image)values('$name','$email','$pass','$contact','$city','$address','$postal_code','$state','$country','$uniroll','$roll','$batch','$dob','$reg_no','$profile')";
$users_registration_submit=mysqli_query($con,$users_registration_query); 
if($users_registration_submit==1){
    $subject = "Registered Successfully";
    $body = "Hi"." ".$name."".",\n\nYou are successfully registered to Student's Corner Portal.\nYour Registered Email-Id is:\nemail="." ".$email." , \n \n password: "." ".$password;
    $me = "From: preetyakanksha1@gmail.com";
    if(mail($email, $subject, $body, $me)){
        echo "Registration Successful \n Login credentials sent at the mail";
    }
    //header("Location:reg.php");   
    }
    else
    {
        echo"<p style='color:red ;font-size:32px'>INVALID ROLL NO or other credentials</p>";
    }
}
else{
    echo"<p style='color:red ;font-size:32px'>Email-id already exists!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>Please go back to previous page and use another Email-id or LOGIN ";
}
?>