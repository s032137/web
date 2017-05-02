<?php
    function head($title) {
        session_start();
        ?>
            <html>
                <head>
                    <meta charset="utf-8">
                    <title>Marathon - <?php echo $title; ?></title>
                     <!-- bootstrap css-->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
                    <!--script src-->
                   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
               </head>
            <body>
                <div class="container">
        <?php
    }
    
    function topNavBar() {
        ?>
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">
                            <span class="glyphicon glyphicon-home"></span> Home
                        </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '
                            <li class="navbar-brand">Hello ' . $_SESSION['firstname'] . '</li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                        ';
                    } else {
                        echo '
                            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        ';
                    }
                    ?>
                  
                </ul>
             
            </nav>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="image-respoinsive center-block" src="img/topbanner1.jpg" width="500px" height="350px" >
                </div>

                <div class="item">
                  <img class="image-respoinsive center-block" src="img/topbanner2.jpg" width="500px" height="350px" >       
                </div>

                <div class="item">
                  <img class="image-respoinsive center-block" src="img/topbanner3.jpg" width="500px" height="350px" >
                </div>

                <div class="item">
                  <img class="image-respoinsive center-block" src="img/topbanner4.jpg" width="500px" height="350px" >
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>                    
        <?php
        
    }
    
    function leftNavBar() {
        ?>
           <div class="row">
            <div class="col-sm-2">
               <ul class="nav nav-pills nav-stacked">
                   <li><a href="aboutus.php">About Us</a></li>
                   <li><a href="raceinfo">Race information</a></li>
                   <li><a href="enquiry.php">Enquiry</a></li>
                   <li><a href="news.php">News</a></li>
               </ul>
            </div>
               <div class="col-sm-8">
                        
        <?php
    }
    
    function footer($title) {
        ?>
            </div>
           </div>
                   <div class="bg-info">
                      <?php
                      if ($title == 'Home') {
                      ?>
                       <div class="container">
                            <hr>
                            <img class="img-responsive img-center" src="img/1.jpg" />
                            <img class="img-responsive img-center" src="img/2.jpg" />
                            <hr>
                            <img class="img-responsive img-center" src="img/3.jpg" />
                            <img class="img-responsive img-center" src="img/4.png" />
                       </div>
                       <?php
                       }
                       ?>
               </div>
</div>
            </body>
            </html>
                <?php
    }

?>
