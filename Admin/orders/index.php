<?php
require_once("../Database/database-conn.php");
require_once("../navbar/index.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/mitchelle/Admin/orders/style.css">
    <script src="/projects/mitchelle/Admin/orders/script.js"></script>
    <title>Document</title>
</head>
<body>  
        <div class="mynav">
            <div class="row">
        <div class="col-md jumbotron  s1"><h1>current orders</h1> </div>
        <div class="col-md jumbotron s2"><h1>history</h1></div>
        <div class="col-md jumbotron s3"><h1>Active orders</h1></div>
        <div class="col-md jumbotron s4"> Manage orders</div>
    </div>
    </div>


<!--------------------------------------------current orders---------------------------------------------->
<div class="row current-orders">
<div class="col-md">
    <table class="table table-bordered text-light">
        <tr>
            <th>customerID</th>
            <th>orderID</th>
            <th>productId</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>

    </table>


</div>

</div>
  
<!-------------------------------------------------------------------------------------------------->    


<!--------------------------------------------history orders---------------------------------------------->
<div class="row all-orders">
    <div class="col-md">
<table class="table table-bordered text-light">
    <tr>
        <th>customerID</th>
        <th>customer name</th>
        <th>orderID</th>
        <th>productId</th>
        <th>Amount</th>
        <th>status</th>
    </tr>
<?php
$q1="SELECT * FROM Orders,Products ,customers WHERE Orders.productId=Products.productID AND Orders.customerID=customers.customerID";
$result1=mysqli_query($conn,$q1);
mysqli_error($conn);
//echo mysqli_num_rows($result1);
//echo mysqli_error($conn);
$total=0;
while ($row=mysqli_fetch_assoc($result1)) {
$productName=$row['productName'];
$productcost=$row['ProductCost'];
$payment=$row['Payment'];
$orderID=$row['orderID']; 
$customerName=$row['customerName'];
$status=$row['status'];
$customerID=$row['customerID'];
echo <<<_END
<tr>
        <td>$customerID</td>
        <td>$customerName</td>
        <td>$orderID</td>
        <td>$productName</td>
        <td>$productcost</td>
        <td>$status</td>
        
    </tr>





_END;

}
?>
    

</table>
</div>
</div>
<!-------------------------------------------------------------------------------------------------->    



<!--------------------------------------------active orders---------------------------------------------->
<div class="row active-orders">
    <div class="col-md">
<table class="table table-bordered text-light">
    <tr>
        <th>customerID</th>
        <th>customer name</th>
        <th>orderID</th>
        <th>productId</th>
        <th>Amount</th>
        
    </tr>
<?php
$q1="SELECT * FROM Orders,Products ,customers WHERE Orders.productId=Products.productID AND Orders.customerID=customers.customerID AND Orders.status='basket'";
$result1=mysqli_query($conn,$q1);
mysqli_error($conn);
//echo mysqli_num_rows($result1);
//echo mysqli_error($conn);
$total=0;
while ($row=mysqli_fetch_assoc($result1)) {
$productName=$row['productName'];
$productcost=$row['ProductCost'];
$payment=$row['Payment'];
$orderID=$row['orderID']; 
$customerName=$row['customerName'];
$status=$row['status'];
$customerID=$row['customerID'];
echo <<<_END
<tr>
<td>$customerID</td>
<td>$customerName</td>
<td>$orderID</td>
<td>$productName</td>
<td>$productcost</td>
   
</tr>




_END;

}




?>

    
   

</table>
</div>
</div>
<!-------------------------------------------------------------------------------------------------->  



<!--------------------------------------------manage orders---------------------------------------------->
<div class="row manage-orders">
    <div class="col-md">
<table class="table table-bordered text-light">
    <tr>
        <th>customerID</th>
        <th>orderID</th>
        <th>productId</th>
        <th>Amount</th>
        <th>Edit</th>
    </tr>
    
    <?php
$q1="SELECT * FROM Orders,Products ,customers WHERE Orders.productId=Products.productID AND Orders.customerID=customers.customerID";
$result1=mysqli_query($conn,$q1);
mysqli_error($conn);
//echo mysqli_num_rows($result1);
//echo mysqli_error($conn);
$total=0;
while ($row=mysqli_fetch_assoc($result1)) {
$productName=$row['productName'];
$productcost=$row['ProductCost'];
$payment=$row['Payment'];
$orderID=$row['orderID']; 
$customerName=$row['customerName'];
$status=$row['status'];
$customerID=$row['customerID'];
echo <<<_END
<tr>
        <td>$customerID</td>
        <td>$orderID</td>
        <td>$productName</td>
        <td>$productcost</td>
       
        <td><a href="" class="btn btn-danger">Cancel</a></td>
        
    </tr>





_END;

}
?>
        
    

</table>
</div>
</div>
<!-------------------------------------------------------------------------------------------------->  











    
</body>
</html>