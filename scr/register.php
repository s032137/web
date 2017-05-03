<?php
require_once('layout.php');
head('Register');
if (!isset($_SESSION['email'])) {
    
?>

        <script type="text/javascript">
            
            function checkSubmit() {
                var warning = document.getElementById("warning");
                if (checkEmail() && checkPwd() && checkFirstName() && checkLastName() && checkPhoneNum() && checkGender()) {
                    return true;
                } else {
                    warning.style.display = "";
                    return false;
                }
                
            }
            
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
            
            function checkFirstName() {
                var x = document.getElementById("firstName").value;
                var y = document.getElementById("fnDiv");
                var z = document.getElementById("fnSymbol");
                if (x.length <= 2) {
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

            function checkLastName() {
                var x = document.getElementById("lastName").value;
                var y = document.getElementById("lnDiv");
                var z = document.getElementById("lnSymbol");
                if (x.length <= 2) {
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
            
            function checkAge() {
                var x = document.getElementById("age").value;
                var y = document.getElementById("ageDiv");
                var z = document.getElementById("ageSymbol");
                if (x < 16 || x >= 100 ) {
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
            
            function checkPhoneNum() {
                var x = document.getElementById("phoneNumber").value;
                var y = document.getElementById("phoneNumDiv");
                var z = document.getElementById("phoneNumSymbol");
                if (x.length !== 8) {
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
            
            function checkDoBDate() {
                var x = document.getElementById("dobDate").value;
                var y = document.getElementById("dobDiv");
                var z = document.getElementById("dobSymbol");
                if (x == "") {
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
            
            function checkGender() {
                var x = document.getElementsByName("gender");
                var y = document.getElementById("genderDiv");
                
                if (x[0].checked || x[1].checked) {
                    y.className="form-group has-success has-feedback";
                    return true;
                } else {
                    y.className="form-group has-error has-feedback";
                    return false;
                }
                
                for (i=0; i<x.gender.length; i++) {
                    if (x.gender[i].checked) {
                        return true;
                        break;
                    } else {
                        return false;
                    }
                }
            }            
        </script>
    </head>
    <body>
    
    <div class="container">
        <div name="warning" id="warning" class="alert alert-warning"  role="alert" style="display: none">
        <strong>Warning!</strong> Please enter all required fields.
        </div>
        <h1>Registration Form</h1>
        <form id="registerform" class="form-horizontal" action="registerprocess.php" method="post" onsubmit="return checkSubmit()"  >
            <div class="form-group" id="emailDiv">
                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                <div class="col-xs-9">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" oninput="checkEmail()">
                    <span id="emailSymbol" style="visibility: hidden"></span>
                </div>
            </div>
            <div class="form-group" id="pwdDiv">
                <label class="control-label col-xs-3" for="inputPassword">Password:</label>
                <div class="col-xs-9">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" oninput="checkPwd()">
                    <span id="pwdSymbol" style="visibility: hidden"></span>
                </div>
            </div>
            <div class="form-group" id="fnDiv">
                <label class="control-label col-xs-3" for="firstName">First Name:</label>
                <div class="col-xs-9">
                    <input name="firstname" type="text" class="form-control" id="firstName" placeholder="First Name" oninput="checkFirstName()">
                    <span id="fnSymbol" style="visibility: hidden"></span>
                </div>
            </div>
            <div class="form-group" id="lnDiv">
                <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                <div class="col-xs-9">
                    <input name="lastname" type="text" class="form-control" id="lastName" placeholder="Last Name" oninput="checkLastName()">
                    <span id="lnSymbol" style="visibility: hidden"></span>
                </div>
            </div>
            <div class="form-group" id="ageDiv">
                <label class="control-label col-xs-3" for="inputAge">Age:</label>
                <div class="col-xs-9">
                    <input name="age" type="text" class="form-control" id="age" placeholder="Age" oninput="checkAge()">
                    <span id="agesSymbol" style="visibility: hidden"></span>
                </div>
            </div>            
            <div class="form-group" id="phoneNumDiv">
                <label class="control-label col-xs-3" for="phoneNumber">Phone Number:</label>
                <div class="col-xs-9">
                    <input name="phonenumber" type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" oninput="checkPhoneNum()">
                    <span id="phoneNumSymbol" style="visibility: hidden"></span>
                </div>
            </div>  
            <div class="form-group" id="dobDiv"> 
                <label class="control-label col-xs-3" for="date">Date of Birth</label>
                <div class="col-xs-9">
                    <input class="form-control" id="dobDate" name="dobDate"  type="date" oninput="checkDoBDate()" />
                    <span id="datesSymbol" style="visibility: hidden"></span>
                </div>
            </div>
            <div class="form-group" id="genderDiv">
                <label class="control-label col-xs-3">Gender:</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="gender" type="radio"  value="male" onclick="checkGender()"> Male
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="gender" type="radio"  value="female" onclick="checkGender()"> Female
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Submit">                   
                </div>
            </div>
    </form>
</div>
        
</body>
</html>
<script>
    <!--Get the date of the max--!>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10){
                dd='0'+dd
        } 
        if(mm<10){
                mm='0'+mm
        }
        today = yyyy-16+'-'+mm+'-'+dd;
        document.getElementById("dobDate").setAttribute("max", today);
    <!--EndDate--!>  
</script>
<?php
} else {
    header("Location: home.php");
}
?>