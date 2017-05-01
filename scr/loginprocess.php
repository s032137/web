<?php

    require_once('db.inc.php');
    $pdo = db_connect();
    session_start();
    
    if (!isset($_SESSION['email'])) {
        if (isset($_POST['email']) && isset($_POST['password']) ) {
            $email = $_POST['email'];;
            $pwd = $_POST['password'];


            $stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email;");
            $stmt->bindParam(":email", $email);
            $stmt->execute();



            $result = $stmt->fetchAll();


            if ($result) {
            foreach ($result as $r) {
                    $db_email = $r[0];
                    $db_pwd = $r[1];
                    $db_firstname = $r[2];
            }

                if ($pwd == $db_pwd) {
                    $_SESSION['email'] = $db_email;
                    $_SESSION['firstname'] = $db_firstname;
                    header("Location: home.php");
                } else {
                    echo "Wrong Password";            
                }
            } else {
                echo "Wrong Email";
            }

            $pdo = null;
        } else {
            echo "Empty input";
        }
    } else {
        echo "You're already login";
    }
        
        
    
   
    
    
            
?>

