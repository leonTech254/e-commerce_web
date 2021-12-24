<?php
require_once("../navbar/index.php");
require_once("../Database/database-conn.php");
if(isset($_POST['btn']))
{

$Bname=htmlspecialchars($_POST['Bname']);
$Btype=htmlspecialchars($_POST['Btype']);
$Blocation=htmlspecialchars($_POST['Blocation']);
$Blink=htmlspecialchars($_POST['Blink']);
$deals=htmlspecialchars($_POST['deals']);
$Bdescription=htmlspecialchars($_POST['Bdescription']);

if(empty($Bname)|| empty($Btype)|| empty($Blocation)|| empty($Blink)|| empty($deals) ||empty($Bdescription))
{
$error="Wrong username/password";
}else
{
    $BId=rand(10000,90000);
    $q="INSERT INTO Adverts(BusinessName,businessID,products,BusnessLink,location,businessDescrption) VALUES('$Bname','$BId','$deals','$Blink','$Blocation','$Bdescription')";
    mysqli_query($conn,$q);
    echo mysqli_error($conn);
}

}







?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/mitchelle/Admin/register@business/style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md">
    <form action="" style="width:40rem;" class="jumbotron buss-form bg-dark" method="post">
        <h3 class="text-center">REGISTER BUSSINESS</h3>


<div class="row">
<div class="col-md"><input type="text" name="Bname" id="" class='form-control' placeholder="Enterprise name"></div>
<div class="col-md"><input type="text" name="Btype" id="" class='form-control' placeholder="business type.."></div>
</div>

<div class="row">
<div class="col-md"><input type="text" name="Blocation" id="" class='form-control' placeholder="business location"></div>
<div class="col-md"><input type="text" name="Blink" id="" class='form-control' placeholder="business web links...."></div>
</div>

<div class="row">
<div class="col-md"><input type="text" name="deals" id="" class='form-control' placeholder="goods & services e.g fashons,electronics etc"></div>

</div>
<div class="row">
<div class="col-md"><textarea name="Bdescription" id=""  rows="10" class="form-control" placeholder="business info..."></textarea></div>
</div>
<div class="row">
    <div class="col-md text-center">
        <button class="btn btn-success" name="btn">Register</button>
    </div>
</div>

    </form></div>
<div class="col-md">
    <div class="registered-buss text-primary">
        <h4 class="text-center">registered business</h4>
        <div class="row">
            <div class="col-md-4 jumbotron">MartinBUSS</div>
            <div class="col-md-4 jumbotron">LeonTEch</div>
            <div class="col-md-4 jumbotron">MarComputers</div>
            <div class="col-md-4 jumbotron">LeonResort</div>
        </div>
        
    </div>
</div>
</div>
    
</body>
</html>