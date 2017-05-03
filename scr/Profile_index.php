<?php
	require_once('layout.php');
    head('Profile');
	topNavBar();
?>


<html>

<head>
    <title>
        Tutorials point Bootstrap Examples
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="http://www.tutorialspoint.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="one-page-wonder.css" rel="stylesheet">
    <style>
        body {
            background: #F1F3FA;
        }
        /* Profile container */
        
        .profile {
            margin: 20px 0;
        }
        /* Profile sidebar */
        
        .profile-sidebar {
            padding: 20px 0 10px 0;
            background: #fff;
		}
		
        .profile-usermenu {
            margin-top: 30px;
        }
        
        .profile-usermenu ul li {
            border-bottom: 1px solid #f0f4f7;
        }
        
        .profile-usermenu ul li:last-child {
            border-bottom: none;
        }
        
        .profile-usermenu ul li a {
            color: #93a3b5;
            font-size: 14px;
            font-weight: 400;
        }
        
        .profile-usermenu ul li a i {
            margin-right: 8px;
            font-size: 14px;
        }
        
        .profile-usermenu ul li a:hover {
            background-color: #fafcfd;
            color: #5b9bd1;
        }
        
        .profile-usermenu ul li.active {
            border-bottom: none;
        }
        
        .profile-usermenu ul li.active a {
            color: #5b9bd1;
            background-color: #f6f9fb;
            border-left: 2px solid #5b9bd1;
            margin-left: -2px;
        }
        /* Profile Content */
        
        .profile-content {
            padding: 20px;
            background: #fff;
            min-height: 460px;
        }
    </style>

</head>

<body>


    <!-- Page Content -->
    <div class="container">

        <h1 class="thick-heading">
        <center>Profile Page</center>
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
                                    <li  class="active">
                                        <a href="Profile_index.php">
                                            <i class="glyphicon glyphicon-home"></i> Overview </a>
                                    </li>
                                    <li>
                                        <a href="Profile_setting.php">
                                            <i class="glyphicon glyphicon-user"></i> Profile Settings </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="glyphicon glyphicon-ok"></i> Tasks </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="glyphicon glyphicon-flag"></i> Help </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-content">
							asdasd
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <!----Code------end----------------------------------->
        </div>
        
        <!-- jQuery -->
        <script src="http://www.tutorialspoint.com/bootstrap/scripts/jquery.min.js">
        </script>

        <!-- Bootstrap Core JavaScript -->
        <script src="http://www.tutorialspoint.com/bootstrap/js/bootstrap.min.js">
        </script>

</body>

</html>