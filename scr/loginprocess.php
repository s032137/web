<?php

    require_once('db.inc.php');
    $pdo = db_connect();
    session_start();
    
    if (!isset($_SESSION['email'])) {
        if (isset($_POST['email']) && isset($_POST['password']) ) {
            $email = $_POST['email'];;
            $pwd = $_POST['password'];


            $stmt = $pdo->prepare("SELECT password FROM member WHERE email = :email;");
            $stmt->bindParam(":email", $email);
            $stmt->execute();



            $result = $stmt->fetchAll();


            if ($result) {
            foreach ($result as $r) {
                $db_pwd = $r['password'];
            }

                if ($pwd == $db_pwd) {
                    $_SESSION['email'] = $email;
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

