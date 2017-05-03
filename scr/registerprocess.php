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
            $pwdmd5 = MD5($pwd);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $phonenumber = $_POST['phonenumber'];
            $date = $_POST['dobDate'];
            $gender = $_POST['gender'];
            
            
            $stmt = $pdo->prepare("INSERT INTO member VALUES(:email,:pwd,:firstname,:lastname,:age,:phonenumber,:date,:gender);");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pwd", $pwdmd5);
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":phonenumber", $phonenumber);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":gender", $gender);
            $stmt->execute();
            
            $pdo = null;
            
            header("Location: home.php");
            } else {
                //Sorry, your email has been registered
                    echo "<html>";
                    echo "<head>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>";
                    echo "<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
                    echo "<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
                    echo "</head>";
                    echo "<body>";
                    echo "<div name='warning' id='warning' class='alert alert-warning'  role='alert'>";
                    echo "<strong>Warning!</strong>Sorry, your email has been registered.";
                    echo "</div>";
                    echo "</body>";
                    echo "</html>";                 
            }
                
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
                    echo "<strong>Warning!</strong>Sorry, please complete the form.";
                    echo "</div>";
                    echo "</body>";
                    echo "</html>";              
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

