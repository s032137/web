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
                                                <form action="adminprocess.php" method="post" id="edit' . $number . 'form" onsubmit="return checkSubmit(\'edit' . $number . 'form\', \'' . $user[0] . '\')">
                                                    <div class="form-group" id="edit' . $number . 'formemailDiv">
                                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="' .$user[0] . '" oninput="checkEmail(\'edit' . $number . 'form\', \'' . $user[0] . '\')">
                                                        <span id="edit' . $number . 'formemailSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group" id="edit' . $number . 'formfirstNameDiv">
                                                        <label for="firstname" class="col-sm-2 control-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="' .$user[2] . '" oninput="checkFirstName(\'edit' . $number . 'form\', \'' . $user[0] . '\')" />
                                                        <span id="edit' . $number . 'formfirstNameSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group" id="edit' . $number . 'formlastNameDiv">
                                                        <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="' .$user[3] . '" oninput="checkLastName(\'edit' . $number . 'form\', \'' . $user[0] . '\')" />
                                                        <span id="edit' . $number . 'formlastNameSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group" id="edit' . $number . 'formageDiv">
                                                        <label for="age" class="col-sm-2 control-label">Age</label>
                                                        <input type="text" class="form-control" id="age" name="age" placeholder="' .$user[4] . '" oninput="checkAge(\'edit' . $number . 'form\', \'' . $user[0] . '\')" />
                                                        <span id="edit' . $number . 'formageSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group" id="edit' . $number . 'formphoneDiv">
                                                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="' .$user[5] . '" oninput="checkPhone(\'edit' . $number . 'form\', \'' . $user[0] . '\')" />
                                                        <span id="edit' . $number . 'formphoneSymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <div class="form-group" id="edit' . $number . 'formbirthdayDiv">
                                                        <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                                                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="' .$user[6] . '" oninput="checkBirthday(\'edit' . $number . 'form\', \'' . $user[0] . '\')" />
                                                        <span id="edit' . $number . 'formbirthdaySymbol" style="visibility: hidden"></span>
                                                    </div>
                                                    <br />
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3">Gender:</label>
                                                        <div class="col-xs-2">
                                                            <label class="radio-inline">
                                                                <input name="gender" type="radio"  value="male" id="gender1"> Male
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="radio-inline">
                                                                <input name="gender" type="radio"  value="female" id="gender2"> Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="form-group">
                                                        <label for="type" class="col-sm-2 control-label">Type</label>
                                                        <div class="col-xs-2">
                                                            <label class="radio-inline">
                                                                <input name="type" type="radio"  value="admin" id="type1">Administrator
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="radio-inline">
                                                                <input name="type" type="radio" value="member" id="type2">Member
                                                            </label>
                                                        </div>
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
                                                    <button type="button" class="btn btn-primary" onclick="checkBirthday(\'edit' . $number . 'form\')">Testing</button> 
                                                </form>
                                                <script type="text/javascript">
                                                    var m = document.getElementById("edit' . $number . 'form").gender1;
                                                    var f = document.getElementById("edit' . $number . 'form").gender2;
                                                    if (m.value == "' . $user[7] . '") {
                                                        m.checked = true;
                                                    } else {
                                                        f.checked = true;
                                                    }
                                                    
                                                    var a = document.getElementById("edit' . $number . 'form").type1;
                                                    var b = document.getElementById("edit' . $number . 'form").type2;
                                                    if (a.value == "' . $user[8] . '") {
                                                        a.checked = true;
                                                    } else {
                                                        b.checked = true;
                                                    }
                                                    
                                                </script>
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
               
      
               //checkSubmit
            function checkSubmit(id) {
                var warning = document.getElementById("warning");
                if (checkEmail(id) && checkFirstName(id) && checkLastName(id) && checkPhone(id) && checkAge(id) && checkBirthday(id)) {
                    return true;
                } else {
                    warning.style.display = "";
                    return false;
                }
                
            }
            //checkEmail
            function checkEmail(id) {
                var x = document.getElementById(id).email;
                var y = document.getElementById(id + 'emailDiv');
                var z = document.getElementById(id + 'emailSymbol');
                var a = x.placeholder;
                 var atpos = x.value.indexOf("@");
                 var dotpos = x.value.lastIndexOf(".");
                if (x.value.length == 0) {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else if (atpos < 1 || dotpos < atpos + 2 || dotpos +2 >= x.value.length) {
                    y.className="form-group has-error has-feedback";
                    z.className="glyphicon glyphicon-remove form-control-feedback";
                    z.style.visibility = "visible";
                    return false;
                } else {
                    alert('correct');
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                }
            }
            
            //checkFirstName
            function checkFirstName(id) {
                var x = document.getElementById(id).firstname;
                var y = document.getElementById(id + 'firstNameDiv');
                var z = document.getElementById(id + 'firstNameSymbol');
                var a = x.placeholder;
                
                if (x.value.length == 0) {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else if (x.value.length <= 2) {
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
            function checkLastName(id) {
                 var x = document.getElementById(id).lastname;
                var y = document.getElementById(id + 'lastNameDiv');
                var z = document.getElementById(id + 'lastNameSymbol');
                var a = x.placeholder;
                
                if (x.value.length == 0) {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else if (x.value.length <= 2) {
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
            function checkAge(id) {
                var x = document.getElementById(id).age;
                var y = document.getElementById(id + "ageDiv");
                var z = document.getElementById(id + "ageSymbol");
                var a = x.placeholder;
                if (x.value.length == 0) {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else if (x.value < 16 || x.value >= 100 ) {
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
            function checkPhone(id) {
                var x = document.getElementById(id).phone;
                var y = document.getElementById(id + "phoneDiv");
                var z = document.getElementById(id + "phoneSymbol");
                var a = x.placeholder;
                
                if (x.value.length == 0) {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else if (x.value.length !== 8) {
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
            function checkBirthday(id) {
                var x = document.getElementById(id).birthday;
                var y = document.getElementById(id + "birthdayDiv");
                var z = document.getElementById(id + "birthdaySymbol");
                var a = x.placeholder;
                
                
                
                if (x.value == "") {
                    x.value = a;
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
                } else {
                    y.className="form-group has-success has-feedback";
                    z.className="glyphicon glyphicon-ok form-control-feedback";
                    z.style.visibility = "visible";
                    return true;
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

?>