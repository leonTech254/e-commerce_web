<?php
require_once("../../../Database/database-conn.php");
$amount=$_POST['amount'];
session_start();
$customerName=$_SESSION['customerName'];
$customerID=$_SESSION['customerID'];
$customerLoacation=$_SESSION['customerLoacation'];
$customerEmail=$_SESSION['customerEmail'];
$customerTelNo=$_SESSION['customerTelNo'];
$requiredAmount=($_SESSION['requiredAmount']);

if($amount!=$requiredAmount)
{
    echo "<script>alert('Amount must be paid in full')</script>";
}else
{
    ##########################################number of orders in the basket################################
//$q1="SELECT * FROM Orders WHERE customerID='$customerID' AND status='basket'";
$q1="UPDATE Orders SET status='pending',Payment='paid' WHERE customerID='$customerID'";
$result1=mysqli_query($conn,$q1);

#########################################################################################

    echo "<script>alert('Thank you,your order is being processed')</script>";

}
print($amount);




?>