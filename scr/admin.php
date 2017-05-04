<?php
    require_once('layout.php');
    require_once('db.inc.php');
    
    head('Administrator');
    topNavBar();
    adminLeftNavBar();
    
    $users = getUserINFO();
    $number = 0;
    
    
    ?>
       <div class="col-sm-10">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th />
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    $number++;
                    echo '
                        <tr>
                            <td>' . $number . '</td>
                            <td>' . $user[0] . '</td>
                            <td>' . $user[2] . '</td>
                            <td>' . $user[3] . '</td>
                            <td>' . $user[4] . '</td>
                            <td>' . $user[5] . '</td>
                            <td>' . $user[6] . '</td>
                            <td>' . $user[7] . '</td>
                            <td>' . $user[8] . '</td>
                            <td>
                                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#edit' . $number . '">
                                    Edit
                                </button>
                                <div class="modal fade" id="edit' . $number . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    Edit User
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="adminprocess.php" method="post" id="edit' . $number . 'form">
                                                    <div class="form-group" id="emailDiv">
                                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="' .$user[0] . '" oninput="checkEmail(\'edit' . $number . 'form\', \'' . $user[0] . '\')">
                                                        <span id="emailSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="firstname" class="col-sm-2 control-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="' .$user[2] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="' .$user[3] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="age" class="col-sm-2 control-label">Age</label>
                                                        <input type="text" class="form-control" id="age" name="age" placeholder="' .$user[4] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="' .$user[5] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                                                        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="' .$user[6] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-sm-2 control-label">Gender</label>
                                                        <input type="text" class="form-control" id="firstname" placeholder="' .$user[7] . '">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-sm-2 control-label">Type</label>
                                                        <input type="text" class="form-control" id="firstname" placeholder="' .$user[8] . '">
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                            Close
                                                    </button>
                                                    <input type="hidden" name="action" value="edit" />
                                                    <button type="submit" class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-primary" onclick="a(\'edit' . $number . 'form\')">Testing</button> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#remove' . $number . '">
                                    Delete
                                </button>
                                <div class="modal fade" id="remove' . $number . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    Remove User
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to remove the user ' . $user[0] . ' ?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="adminprocess.php" method="post">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                            Close
                                                    </button>
                                                    <input type="hidden" name="action" value="remove">
                                                    <input type="hidden" name="email" value="' . $user[0] . '" />
                                                    
                                                    <button type="submit" class="btn btn-primary">
                                                        Yes
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    



	
			
				
				
		
		
				
				
			
';
                    
                }
                ?>
            </tbody>
        </table>
           
           <script type="text/javascript">
               
               function a(id) {
                   alert(id);
                   alert(document.getElementById(id).age.placeholder)
               }
               //checkSubmit
            function checkSubmit() {
                var warning = document.getElementById("warning");
                if (checkEmail() && checkPwd() && checkFirstName() && checkLastName() && checkPhoneNum() && checkGender() && checkTermsbox()) {
                    return true;
                } else {
                    warning.style.display = "";
                    return false;
                }
                
            }
            //checkEmail
            function checkEmail(id) {
                
                var form = document.getElementById(id);
                var x = document.getElementById(id).email;
                var y = document.getElementById(id).emailDiv;
                var z = document.getElementById(id).emailSymbol;
                var a = x.placeholder;
                 var atpos = x.value.indexOf("@");
                 var dotpos = x.value.lastIndexOf(".");
                
                alert(x.value.length);
                if (x.value.length == 0) {
                    x.value == placeholder;
                    return true;
                } else if (atpos < 1 || dotpos < atpos + 2 || dotpos +2 >= x.value.length) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkPwd
            function checkPwd() {
                var x = document.getElementById("inputPassword").value;
                var y = document.getElementById("pwdDiv");
                var z = document.getElementById("pwdSymbol");
                if (x.length <= 7) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkFirstName
            function checkFirstName() {
                var x = document.getElementById("firstName").value;
                var y = document.getElementById("fnDiv");
                var z = document.getElementById("fnSymbol");
                if (x.length <= 2) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkLastName
            function checkLastName() {
                var x = document.getElementById("lastName").value;
                var y = document.getElementById("lnDiv");
                var z = document.getElementById("lnSymbol");
                if (x.length <= 2) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkAge
            function checkAge() {
                var x = document.getElementById("age").value;
                var y = document.getElementById("ageDiv");
                var z = document.getElementById("ageSymbol");
                if (x < 16 || x >= 100 ) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkPhoneNum
            function checkPhoneNum() {
                var x = document.getElementById("phoneNumber").value;
                var y = document.getElementById("phoneNumDiv");
                var z = document.getElementById("phoneNumSymbol");
                if (x.length !== 8) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkDoBDate
            function checkDoBDate() {
                var x = document.getElementById("dobDate").value;
                var y = document.getElementById("dobDiv");
                var z = document.getElementById("dobSymbol");
                if (x == "") {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            //checkGender
            function checkGender() {
                var x = document.getElementsByName("gender");
                var y = document.getElementById("genderDiv");
                
                if (x[0].checked || x[1].checked) {
                    y.className="form-group has-success has-feedback";
                    return true;
                } else {
                    y.className="form-group has-error has-feedback";
                    return false;
                }
                
                for (i=0; i<x.gender.length; i++) {
                    if (x.gender[i].checked) {
                        return true;
                        break;
                    } else {
                        return false;
                    }
                }
            }
               </script>
               
    <?php
    
    function getUserINFO() {
        $pdo = db_connect();
        
        $stmt = $pdo->prepare("SELECT * FROM member;");
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        return $result;
    }
    
    function editUserINFO($email, $firstName, $lastName, $age, $phoneNumber, $dateOfBirth, $gender, $type) {
        
    }

?>