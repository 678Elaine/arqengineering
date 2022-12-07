<?php
//This is the processing page

//making action aware of controller
include("../controllers/customer_controller.php");
require('../settings/core.php');

//collecting form data
if (isset($_POST['save'])){

    $username= $_POST['fullname'];
   
    $usermail= $_POST['email'];
   
    $userpassword= password_hash($_POST['password'], PASSWORD_DEFAULT);
   
    $usercountry= $_POST['country'];
    
    $usercity= $_POST['city'];

    $usernum=$_POST['number'];

    $userorg = $_POST['org'];

    $role = "1";


   $Save = insert_customer($username,$usermail,$userpassword,$usercountry,$usercity, $usernum, $userorg, $role);

 var_dump($Save);

 header("location: ../view/login.php");
}

?>


