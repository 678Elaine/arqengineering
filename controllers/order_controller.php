<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body> 

<?php
include("../classes/order_class.php");



function insert_order($orderdesc,$usermail,$customerid,$username,$businessname)
{
    $order = new Order();
    return $order->insert_order_class($orderdesc,$usermail,$customerid,$username,$businessname);
}



function select_allorder(){
    $selectallorder = new Order();
    return $selectallorder -> select_allorderclass();

}

function select_oneorder($id){

    $selectoneorder = new Order();
    return $selectoneorder -> select_oneorder_class($id);
}

function insert_reply($adminname, $orderreply, $customerid, $id){
    $insertoneorder = new Order();
    return $insertoneorder -> insert_reply_class($adminname, $orderreply, $customerid, $id);
    }

function select_allorder_user(){
    $selectallorderuser = new Order();
    return $selectallorderuser -> select_allorderclass_user();

}

function select_oneorderuser($userid){

    $selectoneorder = new Order();
    return $selectoneorder -> select_oneorder_user($userid);
}

function deleteorder($id){
    $deleteorder = new Order();
    return $deleteorder -> deleteorderclass($id);
}

function update_oneorder($id, $updateresponse)
{
    $updateoneorder = new Order();
    return $updateoneorder->update_oneorder_class($id, $updateresponse);
}

function insert_booking($date, $businessname, $customerid, $usernum, $time){
        $insertbooking = new Order();
        return $insertbooking->insert_booking_class($date, $businessname, $customerid, $usernum, $time);
}

function check_appointment($customerid){
    $checkappointment = new Order();
    return $checkappointment->select_oneappointment_class($customerid);
}

function select_allappointment(){
    $checkappointment = new Order();
    return $checkappointment->select_allappointmentclass();
}

function update_order($id, $updateresponse)
{
    $updateoneorder = new Order();
    return $updateoneorder->update_order_class($id, $updateresponse);
}

function delete_oneorder($id){
    $deleteorder = new Order();
    return $deleteorder -> delete_oneorderclass($id);
}

?>

</html>
