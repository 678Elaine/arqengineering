<?php
require("../settings/db_class.php");



class Customer extends db_connection{

 function insert_customer_class($username,$usermail,$userpassword,$usercountry,$usercity, $usernum, $userorg, $role)
{

$sqlQuery="INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_org`, `user_role`) 
VALUES ('$username','$usermail','$userpassword','$usercountry','$usercity','$usernum', '$userorg', '$role')";
//             return $this->db_query($sql);

return $this->db_query($sqlQuery);


}


function customer_login_class($email){
    $sql2= "SELECT * FROM `customer` where `customer_email`='$email' ";
    return $this->db_fetch_one($sql2);
}

function insert_brand_class($brandname){
   $sql3 = "INSERT INTO brands(brand_name)
           VALUES ('$brandname')";
            return $this->db_query($sql3);

var_dump($sql3);
}


function insert_category_class($catname){
   $sql4 = "INSERT INTO categories(cat_name)
           VALUES ('$catname')";
            return $this->db_query($sql4);

var_dump($sql4);
}

}

?>