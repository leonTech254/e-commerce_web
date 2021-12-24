<?php
require_once("../Database/database-conn.php");
$error="";
if(isset($_POST['btn']))

{
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q="SELECT * FROM Admin WHERE username='$username'";
    $result=mysqli_query($conn,$q);
    $num=mysqli_num_rows($result);
    if($num<0)
    {
        $error="wrong username/password";
    }else{

         while($row=mysqli_fetch_assoc($result))
    {
        $username=$row['username'];
        $passworddb=$row['password'];
        if(password_verify($password,$passworddb))
        {
echo "<script>location.href='/projects/mitchelle/Admin/dash'</script>";


        }else
        {
            $error="wrong username/password";
        }
    }




    }
   

    
    
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
  <link rel="stylesheet" href="/projects/mitchelle/Admin/style.css">
  <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
    <title>Document</title>
</head>
<body class="bg-dark">
    <form action="" class="jumbotron text-center admin-form" style="width:30rem" method='post'>
   
        <h4 class='text-center'>welcome back</h4>
        <h5 class='text-center'>log in</h5>
        <div class='form-control error text-warning'><?php echo $error; ?></div>
        <input type="text" name="username" id="" class="form-control" placeholder='username(email/phone number)'>
        <input type="password" name="password" id="" class="form-control" placeholder="password">
        <button class='btn btn-outline-info' name='btn'>submit</button>
    </form>
  
    
</body>
</html>