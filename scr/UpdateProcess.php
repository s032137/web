<?php
require_once "db.inc.php";
$pdo = db_connect();
session_start();

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstname']) 
        && !empty($_POST['lastname']) && !empty($_POST['phonenumber']) && !empty($_POST['date']) && !empty($_POST['gender'])){  
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			$password = $_POST['password'];
			$firstname = $_POST['firstname'];
			try{
				$stmt = $pdo->prepare("UPDATE member SET FirstName =:firstname, Password =:password, PhoneNumber=:phonenumber WHERE Email = :email");
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
					echo "<p>Cannot update</p>";
				}
			} catch  (PDOException $e) {
			die($e->getMessage());
			}
} else {
			echo '<script language="javascript">';
			echo 'alert("Sorry, please complete the form");';
			echo 'window.location.href="Profile_setting.php";';
			echo '</script>';
        }
?>



