<?php
require 'connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment</title>

</head>
<body>
<center style="margin-top: 10rem">
    <input type="email" name="mail" id="mail" style="width:15rem;height: 2rem;" placeholder="Registered Email-Id"><br><br><br>
    <button style="width: 6rem; height: 3rem; background-color: skyblue; font-weight: bolder; font-size: 2rem;" onclick="pay()">PAY</button>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay() {
       var email= jQuery('#mail').val();
       if(email==''){
        alert('Enter the registered email Id');
       }
       else{
        var options = {
            "key": "rzp_test_VdqRJqa1jBixrZ", // Enter the Key ID generated from the Dashboard
            "amount": "100000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise i.e., 500 INR
            "currency": "INR",
            "name": "Dr. APJAKWIT",
            "description": "Transaction for Registration",
            "image": " ",
            "handler": function (response){
              //console.log(response);
                 jQuery.ajax({
                  type: 'post',
                  url:'btechpayment.php',
                  data:"payment_id="+response.razorpay_payment_id+"&email="+email,
                  success:function(result){
                   alert('Your Payment was Successful');
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