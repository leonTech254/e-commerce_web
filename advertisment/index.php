<?php
require_once("../navbar/index.php");
require_once("../Database/database-conn.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/projects/mitchelle/advertisment/style.css">
  <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Diplomata' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
<script>
  $(document).ready(function(){
    $(".info").slideToggle();
    $(".cardCon").click(function(){
      $(this).closest(".wrap")
      .find(".info")
      .slideToggle(2000)
      
      });


  });


</script>

  <style>
ul li
{
  list-style: none;
}
ul span
{
  font-size: 2rem;
}
.cardCon
{
  cursor: pointer;
  transition: 2s;
  overflow-x: auto;
}
.cardCon:hover
{
  box-shadow: 3px 3px 3px black;
  transform: scale(.9);

}
.info
{
border: 1px solid black;
background-color: aqua;
}
.cardCon
{
    background-image:linear-gradient(rgba(0,0,0,.9),rgba(57, 244, 10, 0.7)) ,url("/projects/mitchelle/images/background/leon6.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    font-family: 'Bungee Shade';
    font-size: 1px;
    text-shadow: 3px 3px 3px rebeccapurple;
}
.cardCon:hover
{
  background-image:linear-gradient(to left rgba(220, 74, 21, 0.9),rgba(16, 158, 139, 0.7)) ,url("/projects/mitchelle/images/background/leon6.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  text-shadow: 3px 3px 3px rgb(4, 172, 164);
  color: rgb(203, 36, 36);
  
}


  </style>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/projects/mitchelle/images/slides/1.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>____</h3>
          <p>for hotels,weddings and events</p>
        </div>
      </div>

      <div class="item">
        <img src="/projects/mitchelle/images/slides/2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>____</h3>
          <p>for hotels,weddings and events</p>
        </div>
      </div>

      <div class="item">
        <img src="/projects/mitchelle/images/slides/3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>____</h3>
          <p>for hotels,weddings and events</p>
        </div>
      </div>

      <div class="item">
        <img src="/projects/mitchelle/images/slides/4.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>____</h3>
          <p>for hotels,weddings and events</p>
        </div>
      </div>

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</b>
<div class="row biz">
<?php
$q="SELECT * FROM Adverts";
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($result))
{
  $bizname=$row['BusinessName'];
  $products=$row['products'];
  $bizlink=$row['BusnessLink'];
  $buzInfo=$row['businessDescrption'];
}




?>
<?php
$q="SELECT * FROM  Adverts";
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($result))
{
  $Bname=$row['BusinessName'];
  $Bproducts=$row['products'];
  $Blink=$row['BusnessLink'];
  $Blocation=$row['location'];
  $buzInfo=$row['businessDescrption'];

echo <<<_END
<div class="col-md-4">
  <div class="wrap">
         <div class="jumbotron text-center cardCon"><h1>$Bname</h1> </div>
         <div class="info">    
            <table class="table table-bordered table-sm">
              <tr>
                <th>Deals</th>
                <th>Location</th>
                <th>link</th>
              </tr>
              <tr>
                <td>$Bproducts</td>
                <td>$Blocation</td>
                <td><a href='$Blink'>official link</a></td>
              </tr>
            </table> 
            <div class="row">
              <div class="col-md-1"><span class='text-success'>desc:</span></div>
              <div class="col-md">$buzInfo</div>
            </div>        
         
             
          </div>        
        </div>
      </div>
_END;

}


?>
    
   
</div>

</body>
</html>
