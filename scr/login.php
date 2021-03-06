<?php
require_once('layout.php');
head('Login');
if (!isset($_SESSION['email'])) {
    
?>

        <script type="text/javascript">
            //checkSubmit
            function checkSubmit() {
                var warning = document.getElementById("warning");
                if (checkEmail() && checkPwd()) {
                    return true;
                } else {
                    //alert('Please finish the form');
                    warning.style.display = "";
                    return false;
                }
                
            }
            //checkEmail
            function checkEmail() {
                var x = document.getElementById("inputEmail").value;
                var y = document.getElementById("emailDiv");
                var z = document.getElementById("emailSymbol");
                
                 var atpos = x.indexOf("@");
                 var dotpos = x.lastIndexOf(".");
                
                if (atpos < 1 || dotpos < atpos + 2 || dotpos +2 >= x.length) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkPassWord
            function checkPwd() {
                var x = document.getElementById("inputPassword").value;
                var y = document.getElementById("pwdDiv");
                var z = document.getElementById("pwdSymbol");
                if (x.length <= 7) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
        </script>
    </head>
    
    
    
    
    
<body>
    <!--Login Form-->
<div name="warning" id="warning" class="alert alert-warning"  role="alert" style="display: none ">
<strong>Warning!</strong> Please enter all required fields.
</div>
<div class="container">
    <h1>Login Form</h1>
    <form id="loginform" class="form-horizontal" action="loginprocess.php" onsubmit="return checkSubmit()" method="post">
        <!--Email-->
        <div class="form-group" id="emailDiv">
            <label for="inputEmail" class="control-label col-xs-3">Email</label>
            <div class="col-xs-9">
                <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email" oninput="checkEmail()">
                <span id="emailSymbol" style="visibility: hidden"></span>
            </div>
        </div>
        <!--Password-->
        <div class="form-group" id="pwdDiv">
            <label for="inputPassword" class="control-label col-xs-3">Password</label>
            <div class="col-xs-9">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" oninput="checkPwd()">
                <span id="pwdSymbol" style="visibility: hidden"></span>
            </div>
        </div>
        <!--Submit Button-->
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>
    
</body>
</html>


<?php
} else {
 //Sorry, please complete the form.
    echo "<html>";
    echo "<head>";
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>";
    echo "<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
    echo "<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
    echo "</head>";
    echo "<body>";
    echo "<div name='warning' id='warning' class='alert alert-warning'  role='alert'>";
    echo "<strong>Warning!</strong>You're already login.";
    echo "</div>";
    echo "</body>";
    echo "</html>";     
    
}
?>