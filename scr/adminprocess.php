<?php
    require_once('db.inc.php');
    session_start();
    
    if (isset($_SESSION['email']) && isset($_SESSION['actype']) && $_SESSION['actype'] == 'admin') {
        switch ($_POST['action']) {
            case 'edit':
                edit($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['age'], $_POST['phone'], $_POST['birthday'], $_POST['gender'], $_POST['type']);
                header('location: admin.php');
                break;
            case 'remove':
                remove($_POST['email']);
                header('location: admin.php');
                break;
            default:
                die('error');
        }
        
    } else {
        header('location: home.php');
    }
    
    function edit($email, $firstname, $lastname, $age, $phone, $birthday, $gender, $type) {
        $pdo = db_connect();
        $stmt = $pdo->prepare("UPDATE member SET Email = :email, Firstname = :firstname, LastName = :lastname, Age = :age, PhoneNumber = :phone, DOB = :birthday, Gender = :gender, Type = :type WHERE Email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":birthday", $birthday);
            $stmt->bindParam(":gender", $gender);
            $stmt->bindParam(":type", $type);
        $stmt->execute();
        $pdo = null;
        
    }
    
    function remove($email) {
            $pdo = db_connect();
            $stmt = $pdo->prepare("DELETE FROM member WHERE Email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            
            $pdo = null;
    }

?>
