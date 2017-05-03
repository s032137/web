<?php
function RegisterFrom(){
	require_once "db.inc.php";
	$pdo = db_connect();	
		if (isset($_SESSION['email'])) {
			$email = $_SESSION['email'];
		}
	$stmt = $pdo->prepare("SELECT * FROM marathon21012018 WHERE email = :email");
	$stmt->bindParam(":email", $email);
	$stmt->execute();
	
	$existed = false;
	if( $stmt->rowCount() == 1 ) {
	$existed = true;
	}
	
	if($existed == true){
		echo "<p><h1>You have already submitted it</h1></p>";
		echo "<br><p><h1>Marathon Date: 21-01-2018</h1></p>";
		echo "<br><p><h1>Hopefully, you will attend on time!</h1></p>";
	}else{
?>

<html>

	<head>
	<!-- bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
	<!--script src-->
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
	
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
			<h3>21-01-2018 Marathon Registration Form</h3>
			<hr>
			
			<form class="form-horizontal" method="post" action="MarathonRegisterProcess.php" id='contact-form'>
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
                    <input name='dobDate' id='dobDate'   class="form-control" type="date" value="<?=$result["DOB"]?>" readonly/>                
				</div>
				</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email:</label>
				<div class="col-lg-8">
				  <input name='email' id='email' class="form-control" type="text" value="<?=$result["Email"]?>" readonly>
				</div>
			 </div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number:</label>
				<div class="col-lg-8">
				  <input name='phonenumber' id='phonenumber' class="form-control" type="text" value="<?=$result["PhoneNumber"]?>">
				</div>
			 </div>
			 <div class="form-group">
                <label class="col-sm-2 control-label">Event(s)</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="event" type="radio"  value="42KM"> Full Marathon(42KM)
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="event" type="radio"  value="21KM"> Half Marathon(21KM)
                    </label>
                </div>
				<div class="col-xs-2">
                    <label class="radio-inline">
                        <input name="event" type="radio"  value="10KM"> 10KM Marathon
                    </label>
                </div>
            </div>
			<br> 
			  <div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-md-8">
				  <input type="submit" class="btn btn-primary" value="Submit"/>
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
<?php
	}
}
?>




