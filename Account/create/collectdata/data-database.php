<?php
require_once("../../../Database/database-conn.php");



###########################################collecting data from form###################################
$fname=htmlspecialchars($_POST['fname']);
$mdlname=htmlspecialchars($_POST['mdlname']);
$surname=htmlspecialchars($_POST['surname']);
$email=htmlspecialchars($_POST['email']);
$telno=htmlspecialchars($_POST['telno']);
$optionaltel=htmlspecialchars($_POST['optionaltel']);
$county=htmlspecialchars($_POST['county']);
$address=htmlspecialchars($_POST['address']);
$Pcode=htmlspecialchars($_POST['Pcode']);
$pass=htmlspecialchars($_POST['pass']);
$conpass=htmlspecialchars($_POST['conpass']);

#########################################################################################################

################################################generating codes#############################
$customerID=rand(1000,5000);


#############################################################################


###################################validation#################################################


if (empty($fname)||empty($mdlname)||empty($surname)||empty($email)||empty($telno)||empty($county)||empty($address)||empty($Pcode))
{
	echo "all field required";
}else

{
if($pass==$conpass)
{
	$password=password_hash($pass, PASSWORD_DEFAULT);
	$fullnames=htmlspecialchars("$fname $mdlname $surname");
$location=htmlspecialchars("$county $address $Pcode");
$q="INSERT INTO customers(customerID,customerName,customerTelNo,customerEmail,customerLoacation) VALUES('$customerID','$fullnames','$telno','$email','$location')";
mysqli_query($conn,$q);
$q="INSERT INTO passwords(customerID,password) VALUES('$customerID','$password')";
mysqli_query($conn,$q);
echo "<b class='text-success'>Registered successfully</b>";

}else
{
	echo "password doesn't match";
}

}




######################################################################################




?>