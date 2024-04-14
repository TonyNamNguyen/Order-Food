<?php
include("connection/connect.php"); //Kết nối đến database
error_reporting(0);
session_start();


// gửi query
mysqli_query($db,"DELETE FROM users_orders WHERE o_id = '".$_GET['order_del']."'"); 
header("location:your_orders.php"); 

?>
