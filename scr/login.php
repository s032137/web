<?php
session_start();
if (!isset($_SESSION['email'])) {

?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        
        <!-- bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!--script src-->
        <script src="js/bootstrap.min.js"></script>
        <script src = "https://code.jquery.com/jquery.js"></script>
    </head>
    
    
    
<body>
<div class="container">
    <h1>Login Form</h1>
    <form class="form-horizontal" action="loginprocess.php" method="post">
        <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-3">Email</label>
            <div class="col-xs-9">
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-3">Password</label>
            <div class="col-xs-9">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
        
    <div class="container">
  <h2>Carousel Example</h2>  
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
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
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
    
</body>
</html>


<?php
} else {
    echo "You're already login";
    
}
?>