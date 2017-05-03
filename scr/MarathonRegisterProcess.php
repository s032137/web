<?php
    require_once('db.inc.php');
    $pdo = db_connect();
    session_start();
    if (!isset($_SESSION['email'])) {
		header("Location: login.php");
		die();     
    } else {
		if (!empty($_POST['email'])  && !empty($_POST['firstname']) 
                && !empty($_POST['lastname']) && !empty($_POST['phonenumber']) && !empty($_POST['dobDate']) && !empty($_POST['gender']) && !empty($_POST['event'])){                            
		
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $event = $_POST['event'];
            $phonenumber = $_POST['phonenumber'];
            $dobDate = $_POST['dobDate'];
            $gender = $_POST['gender'];
            
            
            $stmt = $pdo->prepare("INSERT INTO Marathon21012018 VALUES(:firstname,:lastname,:gender,:dobDate,:email,:phonenumber,:event);");
            $stmt->bindParam(":firstname", $firstname);
			$stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":gender", $gender);
			$stmt->bindParam(":dobDate", $dobDate);
			$stmt->bindParam(":email", $email);
            $stmt->bindParam(":phonenumber", $phonenumber);
            $stmt->bindParam(":event", $event);
            $stmt->execute();
            
            $pdo = null;
            echo '<script language="javascript">';
			echo 'alert("Submit successful!");';
			echo 'window.location.href="Profile_register.php";';
			echo '</script>';
            } else {
				echo '<script language="javascript">';
				echo 'alert("Sorry, please complete the form");';
				echo 'window.location.href="Profile_register.php";';
				echo '</script>';
            }
    }

?>

