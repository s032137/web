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
                    //warning wrong password
                    echo "<html>";
                    echo "<head>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>";
                    echo "<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
                    echo "<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
                    echo "</head>";
                    echo "<body>";
                    echo "<div name='warning' id='warning' class='alert alert-warning'  role='alert'>";
                    echo "<strong>Warning!</strong>Wrong Password.";
                    echo "</div>";
                    echo "</body>";
                    echo "</html>";           
                }
            } else {
                    //warning wrong email
                    echo "<html>";
                    echo "<head>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>";
                    echo "<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
                    echo "<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
                    echo "</head>";
                    echo "<body>";
                    echo "<div name='warning' id='warning' class='alert alert-warning'  role='alert'>";
                    echo "<strong>Warning!</strong>Wrong Email.";
                    echo "</div>";
                    echo "</body>";
                    echo "</html>";   
            }

            $pdo = null;
        } else {
                //warning Empty input
                    echo "<html>";
                    echo "<head>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
                    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>";
                    echo "<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
                    echo "<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
                    echo "</head>";
                    echo "<body>";
                    echo "<div name='warning' id='warning' class='alert alert-warning'  role='alert'>";
                    echo "<strong>Warning!</strong>Empty input.";
                    echo "</div>";
                    echo "</body>";
                    echo "</html>";   
        }
    } else {
        echo "You're already login";
    }            
?>

