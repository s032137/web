<?php
require_once('layout.php');
head('Register');
if (!isset($_SESSION['email'])) {
    
?>

        <script type="text/javascript">
            
            function checkSubmit() {
                var warning = document.getElementById("warning");
                if (checkEmail() && checkPwd() && checkFirstName() && checkLastName() && checkPhoneNum() && checkGender() && checkTermsbox()) {
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
            function checkTermsbox() {  
                if(document.registerform.termsbox.checked == true){
                    alert("You have agree the terms.");
                    return true;
                }else {      
                    return false;
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
        <form name="registerform" id="registerform" class="form-horizontal" action="registerprocess.php" method="post" onsubmit="return checkSubmit()"  >
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
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <label name="termsLabel" id="termsLabel" style="color: black">
                        <input type="checkbox" name="termsbox" values="check" onclick = "checkTermsbox()">I agree to the <a data-toggle="modal" href='#termsModal'>Terms and Conditions</a>
                    </label>
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Submit" onclick="checkSubmit()">                   
                </div>
            </div>           
            <br>
            <!-- Modal -->
          <div class="modal fade" id="termsModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                   <!--Terms and Conditions--> 
                  <h1>Terms and Conditions ("Terms")</h1>
                    <p>Last updated: May 03, 2017</p>

                    <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the home.com website (the "Service") operated by home ("us", "we", or "our").</p>

                    <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>

                    <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. This Terms & Conditions agreement is licensed by <a href="https://termsfeed.com" rel="nofollow">TermsFeed</a> to home.</p>
                    <h2>Accounts</h2>

                    <p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>

                    <p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>

                    <p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
                    <h2>Links To Other Web Sites</h2>

                    <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by home.</p>

                    <p>home has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that home shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

                    <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>

                    <h2>Governing Law</h2>

                    <p>These Terms shall be governed and construed in accordance with the laws of Hong Kong, without regard to its conflict of law provisions.</p>

                    <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>


                    <h2>Changes</h2>

                    <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 60 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

                    <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>


                    <h2>Contact Us</h2>

                    <p>If you have any questions about these Terms, please contact us.</p>                        
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
    </form>

</div>
        
</body>
</html>
<script>
    <!--Get the date of the max-->
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

       
</script>
<?php
} else {
    header("Location: home.php");
}
?>