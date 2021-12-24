<?php
require_once("../navbar/index.php");
require_once("../Database/database-conn.php");
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
    <link rel="stylesheet" href="/projects/mitchelle/product&services/css/style.css">

    <script>
        $(document).on('submit','#orderform',function(e){
            e.preventDefault();
            var data=$("#orderform :input").serializeArray();
         $.post( $("#orderform").attr("action"),data,function(info){$("#error").html(info);})
      });

    </script>
   
    <title></title>
</head>
<body>
  <!--------------------------------------------------------------------------------->
  <div class="modal" id="orderitems">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">YOUR ORDER</h2>
                    <button class="close" data-dismiss="modal"><span>&times;</span> </button>
                </div>
                    <div class="modal-body">
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
<button class="btn btn-danger" name='btn-order-remove'>remove</button></form></td>
</tr>







_END;

}
echo <<<_END
<tr>
<th colspan='4'>Total</th>
<th>Ksh $total</th>


</tr>









_END;





?>
<?php



?>
                        
                            
                        </table>
                                      
                    </div>
                    <div class="modal-footer">
                        <a href="/projects/mitchelle/Account/profile/" class="btn btn-warning">order items</a>
                    </div>
                           
            </div>
        </div>
    </div>
  <!---------------------------------------------------------------------------------->













<div class="row">
    <div class="col-md-2 side-bar">
        <div class="d-flex">
            <div class="mr-auto"></div>
            <div id="toggle-btn"><i class="fas fa-align-justify toogle-sidebar" style="font-size: 4rem;"></i></div>
        </div>
        <div class="item-wrapper">
            <ul>
                <h5>Cartegories</h5>
                <li><a href="/projects/mitchelle/product&services/">show all</a></li>
                <li><a href="?cartegory=phones"> Mobile phones</a></li>
                <li><a href="?cartegory=compAcess"> computer</a></li>
                <li><a href="?cartegory=fashion"> fashion</a></li>
                <li><a href="?cartegory=electronics"> electronic</a></li>
            </ul>
        </div>
       
       
    </div>
    <div class="col-md">
        <div class="row products">
            <?php
            if (isset($_GET['cartegory']))
            {
                $cartegory=$_GET['cartegory'];
                $q="SELECT * FROM Products WHERE cartegory='$cartegory'";
            }else{
                $q="SELECT * FROM Products";

            }
                
                $result=mysqli_query($conn,$q);
                while($row=mysqli_fetch_assoc($result))
                {
                    $productName=$row['productName'];
                    $productID=$row['productID'];
                    $productcost=$row['ProductCost'];
                    $cartegory=$row['cartegory'];
                    $imageName=$row['imagename'];


echo <<<_END
 <li class="col-md-3 jumbotron text-center">
     <div id="error"></div>
<img src="/projects/mitchelle/images/products/$imageName" alt="" style="width: 10rem; height:13rem;">
<hr>
<div class="product-name">$productName</div>
<div class="product-price text-success">Ksh $productcost</div>

<form action="/projects/mitchelle/product&services/product-database.php" method="post" id="orderform">
    <input type="hidden" name="product-choice" id="" value="$productID">
    <button class="btn btn-outline-warning" name="btn-product">add to cart</button>
    
            </form><?php
            require_once("../../../Database
</li>

_END;



                }


                    ?>
           
        </div>




    </div>
    <div class="col-md-1">
        <div class="jumbotron"></div>


    </div>
</div>


    
</body>
<script src="/projects/mitchelle/product&services/js/script.js"></script>
</html>