<?php

    require_once('db.inc.php');
    $pdo = db_connect();
    session_start();
    
    if (!isset($_SESSION['email'])) {
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstname']) 
                && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['phonenumber']) && isset($_POST['dobDate']) && isset($_POST['gender'])){                            

            $email = $_POST['email'];
            
            if (checkemail($pdo,$email)){
                
            
            $pwd = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $phonenumber = $_POST['phonenumber'];
            $date = $_POST['dobDate'];
            $gender = $_POST['gender'];
            
            
            $stmt = $pdo->prepare("INSERT INTO member VALUES(:email,:pwd,:firstname,:lastname,:age,:phonenumber,:date,:gender);");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":phonenumber", $phonenumber);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":gender", $gender);
            $stmt->execute();
            
            $pdo = null;
            
            echo "success";
            } else {
                echo "Sorry, your email has been registered.";
            }
                
        } else {
            echo "Sorry, please complete the form.";
        }
    } 
    
    function checkemail($pdo,$email){
        $stmt = $pdo->prepare("SELECT email FROM member WHERE email = :email;");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        if($result) { 
            return false;
        } else {
           return true;
        }
        $pdo = null;
        
    }
    
    
?>

