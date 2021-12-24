<?php
session_start();
require_once("../Database/database-conn.php");
$customerName=$_SESSION['customerName'];
$customerID=$_SESSION['customerID'];
$customerLoacation=$_SESSION['customerLoacation'];
$customerEmail=$_SESSION['customerEmail'];
$customerTelNo=$_SESSION['customerTelNo'];

##########################################number of orders in the basket################################
$q1="SELECT * FROM Orders WHERE customerID='$customerID' AND status='basket'";
$result1=mysqli_query($conn,$q1);
$number_of_orders=mysqli_num_rows($result1);
echo $_SESSION['ActiveOrders']=$number_of_orders;

#########################################################################################



?>