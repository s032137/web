<?php
session_start();

$reply = "";
if( isset($_SESSION["msg"])){
	$reply = "<p>".$_SESSION["msg"]."</p>";
}
unset($_SESSION["msg"]);
unset($_SESSION["expiry"]);
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
    </head>
    
    
    
<body>
<?=$reply?>
<div class="container">
    <h1>Login Form</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-3">Email</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-3">Password</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
        
</body>
</html>

