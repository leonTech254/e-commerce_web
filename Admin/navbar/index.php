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
  <style>
body
{
  background-image:linear-gradient(to left,rgba(0,0,0,1),rgba(227, 11, 11, 0.5)),url("/projects/mitchelle/images/background/leon7.jpg");
    background-position: center;
    background-size: cover;
}

  </style>
    <title>chukua mtaani</title>
</head>
<body class="text-light">
  <!--------------------------------------------------------------------------------->
  <div class="modal" id="loginform">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">log in form</h2>
                    <button class="close" data-dismiss="modal"><span>&times;</span> </button>
                </div>
                    <div class="modal-body">
                        <form action="/projects/mitchelle/Account/login/logdata-fetch.php" class="text-center" method="post">
                            <div class="form-control text-center error text-danger">error</div>
                            <input type="text" placeholder="email" class="form-control" name="email">
                            <input type="text" name="password" id="" placeholder="password" class="form-control">               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn">log in</button>
                    </div>
                </form>              
            </div>
        </div>
    </div>
  <!---------------------------------------------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-danger" href="#">chukua mtaani/Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/projects/mitchelle/Admin/dash/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projects/mitchelle/Admin/orders/">orders<span class=""></span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/projects/mitchelle/Admin/register@business/">register business <span class=""</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/projects/mitchelle/Admin/manage@web/">Manage web<span class=""</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/projects/mitchelle/Admin/products/">products<span class=""</span></a>
            </li>
            
           
          </ul>
          <div><div class="logout"><a href="" class="btn btn-danger">logout</a> </div></div>
        </div>
      </nav>
      
</body>
</html>