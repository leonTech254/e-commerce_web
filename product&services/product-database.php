<?php
session_start();
require_once("../Database/database-conn.php");

    if(isset($_SESSION['customerID']))
    {
       $productID=$_POST['product-choice'];
    $customerID=$_SESSION['customerID'];
    $orderID=rand(1000,9000);
   $q="INSERT INTO Orders(customerID,orderID,productId,Payment,status) VALUE('$customerID','$orderID','$productID','0','basket')";
   mysqli_query($conn,$q); 
}else
{
    echo "<script>alert('not logged in')</script>";
}



?>