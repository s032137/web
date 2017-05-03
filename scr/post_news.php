<?php
    require_once('layout.php');
    head('Post news');
    if ($_SESSION['email'] != 'admin@vtc.edu.hk') {
        header("location: home.php");
    } else {
        topNavBar();
        ?>
<div class="container">

        <h1 class="thick-heading">
        <center>Post news</center>
		</h1>

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <!------------------------code---------------start---------------->
            <div class="container">
                <div class="row profile">
                    <div class="col-md-3">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li>
                                        <a href="Profile_setting.php">
                                            <i class="glyphicon glyphicon-user"></i> Profile Info </a>
                                    </li>
                                    <li>
                                        <a href="Profile_register.php">
                                            <i class="glyphicon glyphicon-book"></i> Event Application </a>
                                    </li>
                                    <?php
                                        if ($_SESSION['email'] == 'admin@vtc.edu.hk') {
                                            echo ' <li class="active">
                                                        <a href="">
                                                            <i class="glyphicon glyphicon-info-sign"></i> Post news </a>
                                                   </li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
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
                </div>
            </div>

            <br>
            <br>
        </div>
</div>
        <?php
        footer('Post news');
    }
?>

