 <?php
//start session
session_start(); 

//for header redirection
ob_start();


$current_file = $_SERVER['SCRIPT_NAME'];


//funtion to check for login
function checklogin(){
    if(!isset($_SESSION['customer_id'])){
        header('Location: ../view/login.php');
    }
}

//function to get user ID


//function to check for role (admin, customer, etc)
function checkpermission(){
    if(isset($_SESSION['user_role'])){
        return $_SESSION['user_role'];
    }
}










?>  

