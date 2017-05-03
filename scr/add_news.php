<?php
    session_start();
    require_once('db.inc.php');
    if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@vtc.edu.hk' && isset($_POST['topic']) && isset($_POST['content'])) {
        $topic = $_POST['topic'];
        $content = $_POST['content'];
        $date = date('d M Y');
        
        $pdo = db_connect();
        $stmt = $pdo->prepare("INSERT INTO news (date, topic, content) VALUES(:date, :topic, :content);");
        $stmt->bindParam(":date", $date);
        $stmt->bindParam(":topic", $topic);
        $stmt->bindParam(":content", $content);
        $stmt->execute();
        
        header('location: home.php');
    } else {
        header('location: home.php');
    }

?>
