<?php
require_once("database-conn.php");
$varchar="VARCHAR(100) NOT NULL";
$int="INT(100)";
$q="CREATE TABLE Products(productName $varchar,productID $int,ProductCost $int,cartegory $varchar,PRIMARY KEY(ProductID))";
$q="CREATE TABLE customers(customerID $int,customerName $varchar,customerTelNo $varchar,customerEmail $varchar,customerLoacation $varchar)";
$q="CREATE TABLE Orders(customerID $int,orderID $int,productId $int,Payment $varchar,status $varchar)";
$q="CREATE TABLE Adverts(BusinessName $varchar,businessID $int,products $varchar,BusnessLink $varchar,location $varchar,businessDescrption varchar(900))";
mysqli_query($conn,$q);
print(mysqli_error($conn));

$q="CREATE TABLE passwords(customerID $int,password VARCHAR(1000) NOT NULL)";
$q="CREATE TABLE Admin(username $varchar,password $varchar,PRIMARY KEY(username))";
//mysqli_query($conn,$q);
//print(mysqli_error($conn));
#############################################configurartion####################################
$username="leontech";
$password="leon123";  
$password=password_hash($password,PASSWORD_DEFAULT);
$q="INSERT INTO Admin(username,password) VALUES($username,$password)";
//mysqli_query($conn,$q)
##################################################################################################




?>
