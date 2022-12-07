<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pay!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    
</head>

<?php
 require('../settings/core.php');
?>
        <h1>  Make Payment </h1>
    <form id = "paymentForm"  method = "POST" >
        
        <input type="text" name="email" placeholder="Enter your email" id="email-address" required></br>
        <input type="hidden" name="payment" placeholder="Payment" id="amount" value = "0.01" required></br>
        <button type="submit" onclick="payWithPaystack()"> Pay </button>
    </form>
    <script src= "../js/payment.js"></script>


    </div>
</body>
   </html> 
