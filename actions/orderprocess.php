<?php
//This is the processing page

//making action aware of controller
include("../controllers/order_controller.php");
include("../settings/core.php");


//collecting form data
if (isset($_POST['send'])){

    $username= $_POST['name'];
   
    $usermail= $_POST['email'];
   
    $orderdesc= $_POST['message'];
    
    $businessname= $_POST['subject'];

    $customerid = $_SESSION['customer_id'];

    echo $username;
    echo $usermail;
    echo $orderdesc;
    echo $businessname;
    echo $customerid;

    

   $Save = insert_order($orderdesc,$usermail,$customerid,$username,$businessname);



    if ($Save == true){
        header("location: ../view/home.php");
    } else{
     header("location: ../view/home.php");
    }

    var_dump($Send);

 
}


if (isset($_POST['save'])){

    $orderreply= $_POST['response'];
    $id = $_POST['orderid'];
    $customerid = $_POST['customerid'];
    $adminname = $_POST['name'];

    echo $orderreply;
    echo $id;
    echo $customerid; 
    echo $adminname;

   
    
   $Send = insert_reply($adminname, $orderreply, $customerid, $id);

 if ($Send == true){
        header("location: ../view/admin.php");
    } else{
     header("location: ../actions/admin_reply.php");
    }

    var_dump($Send);

 
}

if(isset($_POST['update'])){
    $id=$_POST['orderid'];
    $updateresponse = $_POST['updateresponse'];

    $results = update_oneorder($id,$updateresponse);
    if($results == true){header("Location: ../view/userprojectdetails.php");
}
}

if (isset($_POST['book'])){

    $customername= $_POST['name'];
    $businessname = $_POST['businessname'];
    $usernum = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $customerid = $_SESSION['customer_id'];

    echo $businessname;
    echo $customername;
    echo $usernum;
    echo $date;
    echo $time;
    echo $customerid;

    $Book = insert_booking($date, $businessname, $customerid, $usernum, $time);
   
 if ($Book == true){
        header("location: ../view/appointmentmade.php");
    } else{
     header("location: ../view/appointment.php");
    }

    var_dump($Book);

 
}

if(isset($_POST['updateorder'])){
    $id=$_POST['orderid'];
    $updateresponse = $_POST['updateresponse'];

    $results = update_order($id, $updateresponse);
    if($results == true){header("Location: ../view/vieworders.php");
}
}

//collecting form data
if (isset($_POST['submit'])){

    $username= $_POST['name'];
   
    $usermail= $_POST['email'];
   
    $orderdesc= $_POST['message'];
    
    $businessname= $_POST['subject'];

    $customerid = $_SESSION['customer_id'];

    echo $username;
    echo $usermail;
    echo $orderdesc;
    echo $businessname;
    echo $customerid;

    

   $Save = insert_order($orderdesc,$usermail,$customerid,$username,$businessname);



    if ($Save == true){
        header("location: ../view/contact.php");
    } else{
     header("location: ../view/contact.php");
    }

    var_dump($Send);

 
}

?>



