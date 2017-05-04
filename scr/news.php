<?php
    require_once('layout.php');
    require_once('db.inc.php');
    
    head('News');
    if (isset($_SESSION['email']) && isset($_SESSION['actype']) && $_SESSION['actype'] == 'admin') {
    topNavBar();
    adminLeftNavBar();
    ?>
<div class="col-md-9">
                        <form class="form-horizontal" action="add_news.php" method="post" >
                            <div class="form-group">
                                <input type="text" name="topic" class="form-control" placeholder = "Topic">
                            </div>
                            <div class="form-group">
                                    <textarea name="content" class = "form-control" rows = "10" maxlength="5000"></textarea>
                            </div>
                            <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">                   
                                </div>
                        </form>
                    </div>
<?php
    footer('News');
    } else {
        header('location: home.php');
    }
?>