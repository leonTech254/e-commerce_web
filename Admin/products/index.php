<?php
require_once("../Database/database-conn.php");
require_once("../navbar/index.php");
$feedback="";

if (isset($_POST['upload'])) {


      
    // Get name of images
$Get_image_name = $_FILES['image']['name'];
    
    // image Path
$image_Path = "../../images/products/".basename($Get_image_name);
$productName=$_POST['productName'];
$productPrice=$_POST['productPrice'];
$cartegory=$_POST['cartegory'];
$productID=rand(1000,4000);





    $sql = "INSERT INTO Products(productName,productID,ProductCost,cartegory,imagename) VALUES ('$productName','$productID','$productPrice','$cartegory','$Get_image_name')";
    // Run SQL query
    mysqli_query($conn, $sql);
    print("nnn");

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
        $feedback="Your Image uploaded successfully";
    }else{
        echo  "Not Insert Image";
    }
  }



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/mitchelle/Admin/products/style.css">
    <title>Document</title>
</head>
<body class="products">
    <div class="row">
        <div class="col-md ">
<form action="" class="text-center jumbotron" enctype="multipart/form-data" method="post">
    <h1>add products</h1>
    <div class="row">
        <div class="col-md text-danger text-center">
            <?php if($feedback!=""){echo $feedback;}?> 
        </div>
    </div>
    <div class="row border border-primary">
        <div class="col-md">
            <input type="file" name="image" id="hello">
            <label for="hello" class="btn btn-primary">choose product</label>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <input type="text" id="" class="form-control" name="productName" placeholder="product name">
        </div>
        <div class="col-md">
            <input type="number" name="productPrice" id="" class="form-control" placeholder="product price">
        </div>

        
    </div>
    <div class="row">
        <div class="col-md">
            <select name="cartegory" id="" class="form-control">
                <option value="compAcess">computers accessories</option>
                <option value="phones">phones</option>
                <option value="fashion">fashion</option>
                <option value="electronics">electronics</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <button class="btn btn-info" name="upload">add products</button>
        </div>
    </div>
</form>

        </div>
        <div class="col-md jumbotron">
            <table class="table table-bordered">
                <tr>
                    <th>product name</th>
                    <th>ID</th>
                    <th>cost</th>
                    <th>cartegory</th>
                </tr>
                <?php
                $q="SELECT * FROM Products";
                $result=mysqli_query($conn,$q);
                while($row=mysqli_fetch_assoc($result))
                {
                    $productName=$row['productName'];
                    $productID=$row['productID'];
                    $productcost=$row['ProductCost'];
                    $cartegory=$row['cartegory'];



echo <<<_END

                <tr>
                    <td>$productName</td>
                    <td>$productID</td>
                    <td>$productcost</td>
                    <td>$cartegory</td>
                </tr>




_END;

                }




                ?>
               
            </table>

        </div>
    </div>
    
</body>
</html>