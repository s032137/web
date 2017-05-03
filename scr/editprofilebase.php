<?php
require_once "db.inc.php";
$pdo = db_connect();
session_start();
if (isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}
var_dump($email);
var_dump($_SESSION['email']);

?>

<html>
	<head>
		<!-- bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--script src-->
        <script src="js/bootstrap.min.js"></script>
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

	<div class="container">
		<h1>Edit Profile</h1>
		<hr>
		  <!-- edit form column -->
			<h3>Personal info</h3>
				
			<form class="form-horizontal" method="post" action="update.php">
			  <div class="form-group">
				<label class="col-lg-3 control-label">First name:</label>
				<div class="col-lg-8">
				  <input name='firstname' class="form-control" type="text" value="<?=$result["FirstName"]?>"/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-3 control-label">Last name:</label>
				<div class="col-lg-8">
				  <input name='lastname' class="form-control" type="text" value="<?=$result["LastName"]?>"/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-3 control-label">Gender:</label>
				<div class="col-lg-8">
				  <input name='gender' class="form-control" type="text" value="<?=$result["Gender"]?>" readonly/>
				</div>
			  </div>
			  <div class="form-group"> 
                <label class="col-lg-3 control-label">Date of Birth</label>
                <div class="col-lg-8">
                    <input name='date'   class="form-control" type="date" value="<?=$result["DOB"]?>" readonly/>                
				</div>
				</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Phone number::</label>
				<div class="col-lg-8">
				  <input name='phonenumber' class="form-control" type="text" value="<?=$result["PhoneNumber"]?>">
				</div>
			 </div>
			  <div class="form-group">
				<label class="col-lg-3 control-label">Email:</label>
				<div class="col-lg-8">
				  <input name='email' class="form-control" type="text" value="<?=$result["Email"]?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-md-3 control-label">Password:</label>
				<div class="col-md-8">
				  <input name='password' class="form-control" type="password" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-md-3 control-label">Confirm password:</label>
				<div class="col-md-8">
				  <input name='password' class="form-control" type="password" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-8">
				  <input type="submit" class="btn btn-primary" value="Save Changes">
				  <span></span>
				  <input type="reset" class="btn btn-default" value="Cancel">
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	</div>
	<hr>
	</body>
</html>