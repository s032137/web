<?php
session_start();
?>


<html>
    <head>
        <style>
            #warning {color:red; display:none;}
        </style>
        <meta charset="utf-8"/>
        <title>RegisterForm</title>
        
        <!-- bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!--script src-->
        <script src="js/bootstrap.min.js"></script>

    </head>
    
    <body>
    
    <div class="container">
        <div name="warning" class="hide" role="alert">
        <strong>Warning!</strong> Please input an integer on your age.
    </div>
        <h1>Registration Form</h1>
        <form class="form-horizontal" action="registerprocess.php" method="post" >
            <div class="form-group">
                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                <div class="col-xs-9">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="inputPassword">Password:</label>
                <div class="col-xs-9">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="firstName">First Name:</label>
                <div class="col-xs-9">
                    <input name="firstname" type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                <div class="col-xs-9">
                    <input name="lastname" type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="inputAge">Age:</label>
                <div class="col-xs-9">
                    <input name="age" type="text" class="form-control" id="lastName" placeholder="Age">
                </div>
            </div>            
            <div class="form-group">
                <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
                <div class="col-xs-9">
                    <input name="phonenumber" type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                </div>
            </div>  
            <div class="form-group"> 
                <label class="control-label col-xs-3" for="date">Date of Birth</label>
                <div class="col-xs-9">
                    <input class="form-control" id="date" name="date"  type="date"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Gender:</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="gender" type="radio"  value="male"> Male
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="gender" type="radio"  value="female"> Female
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </div>
    </form>
</div>
        
    </body>
</html>