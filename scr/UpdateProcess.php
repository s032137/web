<?php
require_once "db.inc.php";
$pdo = db_connect();
session_start();

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phonenumber']) ){  

		$email = $_SESSION['email'];
		$stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		if( $stmt->rowCount() == 1 ) {
		$result = $stmt->fetch();
		}
		$db_password = $result['Password'];
				
				
		if($_POST['password'] === $result['Password']){
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			$firstname = $_POST['firstname'];
			try{
				$stmt = $pdo->prepare("UPDATE member SET FirstName =:firstname ,PhoneNumber = :phonenumber WHERE Email = :email");
				$stmt->bindParam(":firstname", $firstname);
				$stmt->bindParam(":email", $email);
				$stmt->bindParam(":phonenumber", $phonenumber);
				$stmt->execute();
				
				if( $stmt->rowCount() > 0) {
					echo '<script language="javascript">';
					echo 'alert("Data updated!");';
					echo 'window.location.href="Profile_setting.php";';
					echo '</script>';
					$_SESSION['firstname'] = $_POST['firstname'];
				}else{
					echo '<script language="javascript">';
					echo 'alert("Cannot update!");';
					echo 'window.location.href="Profile_setting.php";';
					echo '</script>';
				}
			} catch  (PDOException $e) {
				die($e->getMessage());
			}
			
			
		} else{
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			$firstname = $_POST['firstname'];
			$password = $_POST['password'];
			try{
				$stmt = $pdo->prepare("UPDATE member SET FirstName = :firstname, PhoneNumber = :phonenumber, Password = :password WHERE Email = :email");
				$stmt->bindParam(":firstname", $firstname);
				$stmt->bindParam(":email", $email);
				$stmt->bindParam(":phonenumber", $phonenumber);
				$stmt->bindParam(":password", $password);
				$stmt->execute();
				
				if( $stmt->rowCount() > 0) {
					echo '<script language="javascript">';
					echo 'alert("Data updated!");';
					echo 'window.location.href="Profile_setting.php";';
					echo '</script>';
					var_dump($firstname);
					$_SESSION['firstname'] = $_POST['firstname'];
				}else{
					echo '<script language="javascript">';
					echo 'alert("Cannot update!");';
					echo 'window.location.href="Profile_setting.php";';
					echo '</script>';
				}
			} catch  (PDOException $e) {
				die($e->getMessage());
			}
		}
	}else {		
			echo '<script language="javascript">';
			echo 'alert("Sorry, please complete the form");';
			echo 'window.location.href="Profile_setting.php";';
			echo '</script>';
        }
?>



