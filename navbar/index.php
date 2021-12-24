<?php
session_start();
$customerName="";
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

}
if(isset($_GET['logout']))
{
  session_destroy();
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/mitchelle/frameworks/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="/projects/mitchelle/frameworks/jquery.js"></script>
	<script type="text/javascript" src="/projects/mitchelle/frameworks/fontawesome/js/all.js"></script>
	<script type="text/javascript" src="/projects/mitchelle/frameworks/bootstrap/js/bootstrap.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'> 
  <link href='https://fonts.googleapis.com/css?family=Fjord One' rel='stylesheet'>
  <link rel="stylesheet" href="/projects/mitchelle/navbar/css/nav.css">
    <title>chukua mtaani</title>

    <script type="text/javascript">
      $(document).on('submit','#logibn-form',function(e){
        e.preventDefault();
        var data=$("#login-form: input").serializeArray();
     $.post( $("#login-form").attr("action"),data,function(info){$("#err").html(info);})
  });

      $(document).ready(function(){
        
    setInterval(function(){
   $(".ordersNum").load("/projects/mitchelle/navbar/auto-run.php");
    },1000);
   

      });
    

    </script>
</head>
<body>
  <!--------------------------------------------------------------------------------->
  <div class="modal" id="loginform">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">log in form</h2>
                    <button class="close" data-dismiss="modal"><span>&times;</span> </button>
                </div>
                    <div class="modal-body">
                        <form action="/projects/mitchelle/Account/login/logdata-fetch.php" class="text-center" method="post" id="login-form">
                            <div class="form-control text-center error text-danger" id="err"></div>
                            <input type="text" placeholder="email" class="form-control" name="email">
                            <input type="password" name="password" id="" placeholder="password" class="form-control">               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn">log in</button>
                    </div>
                </form>              
            </div>
        </div>
    </div>
  <!---------------------------------------------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-ldight">
        <a class="navbar-brand text-danger" href="#">chukua mtaani</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/projects/mitchelle/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projects/mitchelle/product&services/">products</a>
            </li>
      
        <li class="nav-item">
              <a class="nav-link" href="/projects/mitchelle/advertisment/">advetisements</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/projects/mitchelle/Account/create/">Create Acoount</a>
                <a class="dropdown-item" href="/projects/mitchelle/Account/lnogin/" data-toggle="modal" data-target="#loginform">log in</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?logout=1">log out</a>
              </div>
            </li>         
          </ul>
          <div class="user-icon text-center">
            <img src="/projects/mitchelle/images/users/user.png" alt="" style="width:2rem;height:2rem;"><br>
            <div class="name" style="font-size:10px;"><?php if($customerName!=""){echo $customerName;} ?></div>

        </div>
        <a href="" data-toggle="modal" data-target="#orderitems">
          <div><i class="fas fa-shopping-cart " style="font-size: 2rem; color:red;"></i><sup class=""><span class="ordersNum badge badge-danger" style="font-size:0.9rem;"></span></sup></div>
          </a>
        </div>
      </nav>
      
</body>
</html>


<?php
if (isset($_SESSION['customerID']))
{

}else
{
echo <<<_END
<script>
$(".ordersNum").hide();
$(".fa-shopping-cart").hide();
$('.user-icon').hide();
</script>
_END;
}





?>