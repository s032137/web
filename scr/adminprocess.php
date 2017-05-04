<?php
    require_once('db.inc.php');
    session_start();
    
    if (isset($_SESSION['email']) && isset($_SESSION['actype']) && $_SESSION['actype'] == 'admin') {
        echo $_POST['action'];
        echo $_POST['email'];
    } else {
        header('location: home.php');
    }

?>
