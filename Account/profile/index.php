su<?php
require_once("../../Database/database-conn.php");
require_once("../../navbar/index.php");


if (isset($_SESSION['customerID']))
{
$customerName=$_SESSION['customerName'];
$customerID=$_SESSION['customerID'];
$customerLoacation=$_SESSION['customerLoacation'];
$customerEmail=$_SESSION['customerEmail'];
$customerTelNo=$_SESSION['customerTelNo'];
$activeOrders=$_SESSION['ActiveOrders'];



}else
{
  echo "<script>location.href='/projects/mitchelle/'</script>";
}
if(isset($_POST['btn-order-remove']))
{
    
    $orderID=$_POST['orderID'];
    $q="DELETE FROM Orders WHERE customerID='$customerID' AND orderID='$orderID'";
    mysqli_query($conn,$q);
    echo mysqli_error($conn);

}


    




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">



    <script>
       

      $(document).ready(function(){
        $(document).on('submit','#form-pay',function(e){
            e.preventDefault();
            var data=$("#form-pay :input").serializeArray();
         $.post( $("#form-pay").attr("action"),data,function(info){$("#show").html(info);})
      });



        $("#toggle-payment").slideToggle();
          $("#payment-methods").click(function(){
        $("#toggle-payment").slideToggle();

            

          });
         
      });

    </script>
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md text-center jumbotron">
           
            <div class="profile-pic ">
                <img src="/projects/mitchelle/images/users/user.png" alt="" style="width:4rem;height:4rem;">
                <hr>

                <div class="form-control">
                    <div class="row">
                        <div class="col-md">Name</div>
                        <div class="col-md"><?php  echo $customerName; ?></div>
                    </div>

                </div>


                <div class="form-control">
                    <div class="row">
                    
                        <div class="col-md">tel:</div>
                        <div class="col-md"><?php  echo $customerTelNo;  ?></div>
                    </div>

                </div>


                <div class="form-control">
                    <div class="row">
                        <div class="col-md">email</div>
                        <div class="col-md"><?php  echo $customerEmail; ?></div>
                    </div>

                </div>

                <div class="form-control">
                    <div class="row">
                        <div class="col-md">location</div>
                        <div class="col-md"><?php  echo $customerLoacation; ?></div>
                    </div>

                </div>
                
            </div>


            <div class="row" style="margin-top: .5em;">
                <div class="col-md-12 jumbotron bg-dark">
                    <h3>Pending orders</h3>
                    <table class="table table-dark table-bordered">
                        <tr>
                            <th>items</th>
                            <th>cost</th>
                            <th>payment</th>
                            <th>order ID</th>
                            <th>status</th>
                            
                        </tr>                   
                    <?php
                    $q1="SELECT * FROM Orders,Products WHERE Orders.productId=Products.productID AND Orders.customerID='$customerID' AND Orders.status='pending'";
                    $result1=mysqli_query($conn,$q1);
                    //echo mysqli_num_rows($result1);
                    //echo mysqli_error($conn);
                    $total=0;
                    while ($row=mysqli_fetch_assoc($result1)) {
                    $productName=$row['productName'];
                    $productcost=$row['ProductCost'];
                    $payment=$row['Payment'];
                    $orderID=$row['orderID'];
                    $status=$row['status'];
echo <<<_END
<tr>
    <td>$productName</td>
    <td>$productName</td>
    <td class="text-success"> $payment</td>
    <td>$orderID</td>
    <td>$status</td>
</tr>
_END;
                    
                    

                    }





                    ?>

                </table>    
                </div>
                <div class="col-md"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="order-active">
                <h3 class="text-center">Active orders</h3>
            <table class="table table-bordered table-sm">
                            <tr>
                                <td>items</td>
                                <td>cost</td>
                                <td>payment</td>
                                <td>order ID</td>
                                <td>manage</td>
                            </tr>
            <?php
$q1="SELECT * FROM Orders,Products WHERE Orders.productId=Products.productID AND Orders.customerID='$customerID' AND Orders.status='basket'";
$result1=mysqli_query($conn,$q1);
//echo mysqli_num_rows($result1);
//echo mysqli_error($conn);
$total=0;
while ($row=mysqli_fetch_assoc($result1)) {
$productName=$row['productName'];
$productcost=$row['ProductCost'];
$payment=$row['Payment'];
$orderID=$row['orderID'];  

  

$total+=$productcost;

echo <<<_END
<tr>
<td>$productName</td>
<td>$productcost</td>
<td>$payment</td>
<td>$orderID</td>
<td><form action="" id="order-delete" method='post'>
<input type="hidden" name="orderID" value="$orderID">
<button class="btn btn-danger" name='btn-order-remove'>remove</button></form>
</td>

</tr>







_END;

}
echo <<<_END
<tr>
<th colspan='4'>Total</th>
<th>Ksh $total</th>
</tr>
            </table>
_END;
$_SESSION['requiredAmount']=$total;


?>
<div class="row">
    <div class="col-md">
        <button class="btn btn-warning form-control" id="payment-methods">make payment</button>
    </div>
</div>
<div class="pay-container">
<div class="row" id="toggle-payment">
    <div class="show" id="show"></div>
    <div class="col-md">
       
        <div class="row" style="margin-bottom: .5rem;">
<div class="col-md text-center d-flex justify-content-around">
    <img src="/projects/mitchelle/images/payment/mpesa.png" alt="" style="width: 10rem;" class="btn btn-dark">
    <img src="/projects/mitchelle/images/payment/paypal.png" alt="" style="width: 10rem;"  class="btn btn-dark">
</div>

        </div>
        <form action="/projects/mitchelle/Account/profile/payment/payment.php" method="post" class="d-flex justify-content-around" id="form-pay" >
            <input type="number" name="amount" id="" placeholder="Enter-Amount">
            <button class="btn btn-success">Amount</button>
        </form>

    </div>
   
</div>
</div>
            </div>
         

        </div>

    </div>
    
</body>
</html>
