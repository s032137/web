<html>

	<head>
         <!-- bootstrap css-->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
                    <!--script src-->
                   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
					<style>
						#success_message {
							display: none;
						}
					</style>
	</head>
	
	<body>

		  <!-- edit form column -->
			<h3>Personal info</h3>
			<hr>
			
			<form class="form-horizontal" method="post" action="update.php" id="contact_form">
			  <div class="form-group">
				<label class="col-sm-2 control-label">First name:</label>
				<div class="col-lg-8">
				  <input name='first_name' class="form-control" type="text" />
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Last name:</label>
				<div class="col-lg-8">
				  <input name='lastname' class="form-control" type="text" />
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Gender:</label>
				<div class="col-lg-8">
				  <input name='gender' class="form-control" type="text" />
				</div>
			  </div>
			  <div class="form-group"> 
                <label class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-lg-8">
                    <input name='date'   class="form-control" type="date" />                
				</div>
				</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number::</label>
				<div class="col-lg-8">
				  <input name='phonenumber' class="form-control" type="text" >
				</div>
			 </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Email:</label>
				<div class="col-lg-8">
				  <input name='email' class="form-control" type="text">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Password:</label>
				<div class="col-md-8">
				  <input name='password' class="form-control" type="password" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Confirm password:</label>
				<div class="col-md-8">
				  <input name='password' class="form-control" type="password" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-md-8">
				  <input type="submit" class="btn btn-primary" value="Save Changes">
				  <span></span>
				  <input type="reset" class="btn btn-default" value="Cancel">
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	<hr>
	</body>
</html>

<script>
      $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


</script>