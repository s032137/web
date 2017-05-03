<?php
function EditProfile(){
require_once "db.inc.php";
$pdo = db_connect();
if (isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}
?>

<html>

	<head>
         <!-- bootstrap css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <!--script src-->
       <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
                #success_message {
                        display: none;
                }
        </style>
	</head>
<?php
	$stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
	$stmt->bindParam(":email", $email);
	$stmt->execute();
	if( $stmt->rowCount() == 1 ) {
	$result = $stmt->fetch();
	}
?>
	
	<body>

		  <!-- edit form column -->
			<h3>Personal info</h3>
			<hr>
			<div name="warning" id="warning" class="alert alert-warning"  role="alert" style="display: none ">
			<strong>Warning!</strong> Please enter all required fields.
			</div>
			<div name="pwWarning" id="pwWarning" class="alert alert-warning"  role="alert" style="display: none ">
			<strong>Warning!</strong> Please enter more than 7 characters.
			</div>
			
			<form class="form-horizontal" method="post" action="UpdateProcess.php" id='contact-form' onsubmit="return checkSubmit()">
			  <div class="form-group">
				<label class="col-sm-2 control-label">First name:</label>
				<div class="col-lg-8">
				  <input name='firstname' id='firstname' class="form-control" type="text" value="<?=$result["FirstName"]?>" readonly/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Last name:</label>
				<div class="col-lg-8">
				  <input name='lastname' id='lastname' class="form-control" type="text" value="<?=$result["LastName"]?>" readonly/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Gender:</label>
				<div class="col-lg-8">
				  <input name='gender' id='gender' class="form-control" type="text" value="<?=$result["Gender"]?>" readonly/>
				</div>
			  </div>
			  <div class="form-group"> 
                <label class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-lg-8">
                    <input name='date' id='date'   class="form-control" type="date" value="<?=$result["DOB"]?>" readonly/>                
				</div>
				</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number::</label>
				<div class="col-lg-8">
				  <input name='phonenumber' id='phonenumber' class="form-control" type="text" value="<?=$result["PhoneNumber"]?>">
				</div>
			 </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Email:</label>
				<div class="col-lg-8">
				  <input name='email' id='email' class="form-control" type="text" value="<?=$result["Email"]?>" readonly/ >
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Password:</label>
				<div class="col-md-8">
				  <input name='password' id="password" class="form-control" type="password" value=""/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Confirm password:</label>
				<div class="col-md-8">
				  <input name='cpassword' id="cpassword" class="form-control" type="password" value=""/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-md-8">
				  <input type="submit" class="btn btn-primary" value="Save Changes"/>
				  <span></span>
				  <input type="reset" class="btn btn-default" value="Cancel"/>
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	<hr>
	</body>
</html>

<script type="text/javascript">
	var password = document.getElementById("password"), confirm_password = document.getElementById("cpassword"), firstname = document.getElementById("firstname"), lastname = document.getElementById("lastname"), gender = document.getElementById("gender"), date = document.getElementById("date"), phonenumber = document.getElementById("phonenumber"), email = document.getElementById("email") ;

	function validatePassword() {
	  if (password.value != confirm_password.value) {
		confirm_password.setCustomValidity("Passwords Don't Match");
	  } else {
		confirm_password.setCustomValidity("");
	  }
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
	
	function checkSubmit() {
		var warning = document.getElementById("warning");
		var pwWarning = document.getElementById("pwWarning");
		if (checkPwd()) {
			return true;
			}else if(checkPwd() == false){
				pwWarning.style.display = "";
				return false;
			}else{
				warning.style.display = "";
				return false;
			}
	}
	
	function checkPwd() {
		var x = document.getElementById("password").value;
			if (x.length <= 7) {
				//alert("Please enter more than 7 character");
				return false;
			} else {
				return true;
			}
    }
	

	
</script>

<?php
}
?>






