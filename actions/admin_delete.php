<?php 

require('../controllers/order_controller.php');
$id = $_GET['id'];

$delete = deleteorder($id);

header('Location: ../view/vieworders.php');

?>