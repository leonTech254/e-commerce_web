<?php
require_once("../../Database/database-conn.php");
require_once("../../session_manage/session.php");
echo "<script>location.href='/projects/mitchelle/'</script>";
$email= htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    $q="SELECT * FROM customers where customerEmail='$email'";
    $result=mysqli_query($conn,$q); 
    if(mysqli_num_rows($result)==1)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $customerName=$row['customerName'];
            $customerID=$row['customerID'];
            $customerLoacation=$row['customerLoacation'];
            $customerEmail=$row['customerEmail'];
            $customerTelNo=$row['customerTelNo'];

        }

        

            ##password table
            $q="SELECT * FROM passwords WHERE  customerID='$customerID'";
            $result=mysqli_query($conn,$q);
            while ($row=mysqli_fetch_assoc($result)) {
                $dbpassword=$row['password'];
                if(password_verify($password, $dbpassword))
                {
                    $_SESSION['customerName']=$customerName;
                    $_SESSION['customerID']=$customerID;
                    $_SESSION['customerLoacation']=$customerLoacation;
                    $_SESSION['customerEmail']=$customerEmail;
                    $_SESSION['customerTelNo']=$customerTelNo;

##########################################number of orders in the basket################################
$q1="SELECT * FROM Orders WHERE customerID='$customerID' AND status='basket'";
$result1=mysqli_query($conn,$q1);
$number_of_orders=mysqli_num_rows($result1);
echo $_SESSION['ActiveOrders']=$number_of_orders;

#########################################################################################

                }else
                {
                    echo "wrong username/password";
                }
                
            }
        }else
        {
            echo "wrong username/password";
        }
    
    

    $email=$_POST['password'];





?>