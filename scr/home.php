<?php
    require_once('layout.php');
    require_once('db.inc.php');
    head('Home');
    topNavBar();
    leftNavBar();
    
    $news = getNews();
    
    ?>
<nav class = "navbar navbar-default" role = "navigation" >   
   <div class = "navbar-header">
      <a class = "navbar-brand" style="color: blue "><span class="glyphicon glyphicon-book"> Latest News</span></a>
   </div>   
</nav>

    <?php
    foreach(array_reverse($news) as $new) {
        echo '<div class="panel panel-primary">
                <div class="panel-heading">
                  [' . $new[1] . '] ' . $new[2] . '</div>
                <div class="panel-body">
                  ' . $new[3] . '
                </div>
              </div>';
        
    }   
    footer('Home');

    function getNews() {
        $pdo = db_connect();
        $stmt = $pdo->prepare("SELECT * FROM news;");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    
?>
