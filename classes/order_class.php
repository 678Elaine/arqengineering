<?php
require("../settings/db_class.php");



class Order extends db_connection{

 function insert_order_class($orderdesc,$usermail,$customerid,$username,$businessname)
{

    return $this->db_query("INSERT INTO `orderdetails`(`order_desc`, `customer_email`, `customer_id`, `customer_name`, `business_name`) VALUES ('$orderdesc','$usermail','$customerid','$username','$businessname')");





}

function select_allorderclass(){
    return $this->db_fetch_all("SELECT * from orderdetails");
}

function select_oneorder_class($id){
    return $this->db_fetch_one("SELECT `order_desc` from orderdetails where orderid = '$id'");
}
function select_oneorder_user($userid){
    return $this->db_fetch_one("SELECT `Admin`.`admin_response`, `orderdetails`.`order_desc`,`orderdetails`.`orderid` FROM `Admin` INNER JOIN `orderdetails` ON `Admin`.`orderid` = `orderdetails`.`orderid` where `orderdetails`.`customer_id`= '$userid'");
}

function insert_reply_class($adminname, $orderreply, $customerid, $id){
    return $this-> db_query("INSERT INTO `Admin`(`admin_name`, `admin_response`, `customer_id`, `orderid`) VALUES ('$adminname','$orderreply','$customerid','$id')");
}

function select_allorderclass_user(){
    return $this-> db_fetch_all("SELECT `Admin`.`admin_response`, `orderdetails`.`order_desc`,`orderdetails`.`orderid` FROM `Admin` INNER JOIN `orderdetails` ON `Admin`.`orderid` = `orderdetails`.`orderid`");
}

function deleteorderclass($id){
    return $this -> db_query("DELETE FROM orderdetails WHERE orderid=$id");
}
function update_oneorder_class($id, $updateresponse){
    $sql4 = "UPDATE orderdetails set order_desc='$updateresponse' where orderid='$id'";
             return $this->db_query($sql4);
    
    }
function insert_booking_class($date, $businessname, $customerid, $usernum, $time){
        return $this-> db_query("INSERT INTO `appointment`(`date`, `business_name`, `customer_id`, `customer_number`, `time`) VALUES ('$date','$businessname','$customerid','$usernum','$time')");
    }

function select_oneappointment_class($customerid){
    return $this->db_fetch_one("SELECT `date`, `time` from appointment where customer_id = '$customerid'");
}


}

?>