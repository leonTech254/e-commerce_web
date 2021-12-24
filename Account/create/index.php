<?php


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/mitchelle/frameworks/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/projects/mitchelle/Account/create/css/style.css">
    <script type="text/javascript" src="/projects/mitchelle/frameworks/jquery.js"></script>

    <title>Document</title>
    <script>
        $(document).ready(function(){
            $(document).on('submit','#form',function(e){
                e.preventDefault();
                var data=$("#form :input").serializeArray();
             $.post( $("#form").attr("action"),data,function(info){$("#error").html(info);})
          });
        })

    </script>
  
</head>
<body>
<div class="row">
    <div class="col-md">
        <form id='form' action="/projects/mitchelle/Account/create/collectdata/data-database.php" class="jumbotron  text-center customer-form" method="post">
            <h5>CREATE ACCOUNT</h5>
            <h5 class="logo">Chukua mtaani</h5>
            <div class="form-control error text-danger" ><span id="error"></span></div>
            <div class="row border-bottom border-primary">
                <div class="col-md"><input type="text" class="form-control" name="fname" placeholder="fistname"></div>
                <div class="col-md"><input type="text" class="form-control" name="mdlname" placeholder="middlename"></div>
                <div class="col-md"><input type="text" class="form-control" name="surname" placeholder="surname"></div>
</div>
<div class="row border-bottom border-primary">
    <div class="col-md"><input type="email" class="form-control" name="email" placeholder="email"></div>
    <div class="col-md"><input type="text" class="form-control" name="telno" placeholder="telephone"></div>
    <div class="col-md"><input type="text" class="form-control" name="optionaltel" placeholder="add telephone(optional)"></div>
</div>
<div class="row border-bottom border-primary">
    <div class="col-md"><input type="text" class="form-control" name="county" id="" placeholder="county"></div>
    <div class="col-md"><input type="text" class="form-control" name="address" placeholder="address"></div>
    <div class="col-md"><input type="text" class="form-control" name="Pcode" placeholder="postal code"></div>
</div>
<div class="row border-bottom border-primary">
    <div class="col-md"><input type="password" name="pass" id="" class="form-control" placeholder="passowrd"></div>
    <div class="col-md"><input type="password" name="conpass" id="" class="form-control" placeholder="comfirm pasword"></div>
</div>
<div class="row">
    <div class="col"><button class="btn btn-outline-warning" name="btn">submit</button></div>
</div>
<div class="row">
    <div class="col"><a href="/projects/mitchelle/">already have an Account?</a></div>
</div>


        </form>
    </div>
    
</div>

    
</body>
</html>