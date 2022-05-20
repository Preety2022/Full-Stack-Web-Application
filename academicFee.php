<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>@font-face { font-family: JuneBug; src: url('JUNEBUG.TTF');</style>
   <link rel="stylesheet" type="text/css" href="stylesheets\style1.css">
   <title>Fee Payment</title>
</head>
<body>
<center style="margin-top: 10rem">
    <select name="year" id= "year" class="inputbox" style=" margin-bottom: 20px;" required>
    <option value="1" >First Year</option>
    <option value="2">Second Year</option>
    <option value="3" >Third Year</option>
    <option value="4" >Fourth Year</option></select>
    <br><br><br>
    <input type="email" name="mail" id="mail" class="inputbox" placeholder="Registered Email-Id"><br><br><br>
    <button style="width: 6rem; height: 3rem; background-color: skyblue; font-weight: bolder; font-size: 2rem;" onclick="pay()">PAY</button>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay() {
       var email= jQuery('#mail').val();
       var year = jQuery('#year').val();
       //console.log(year);
       if(email==''){
        alert('Enter the registered email Id');
       }
       else{
        var options = {
            "key": "rzp_test_VdqRJqa1jBixrZ", // Enter the Key ID generated from the Dashboard
            "amount": "8100000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise i.e., 500 INR
            "currency": "INR",
            "name": "Dr. APJAKWIT",
            "description": "Transaction for Registration",
            "image": " ",
            "handler": function (response){
              //console.log(response);
                 jQuery.ajax({
                  type: 'post',
                  url:'academicFeePayment.php',
                  data:"payment_id="+response.razorpay_payment_id+"&email="+email+"&year="+year,
                  success:function(result){
                   alert('Your Payment was Successful! Close the window');
                  }
                });

                }
        };
    }
    var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>

</body>
</html>