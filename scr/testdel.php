<html>
	<head>
	                     <!-- bootstrap css-->
                    <link rel="stylesheet" href="https://yui.yahooapis.com/pure/0.5.0/pure-min.css">
                    
                    <!--script src-->
                   <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</script>
					<style>
						#success_message {
							display: none;
						}
					</style>
	</head>


<body>

<form class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" placeholder="Password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        <button type="submit" class="pure-button pure-button-primary" onclick="validatePassword"">Confirm</button>
    </fieldset>
</form>

</body>
</html>


<script>
var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

function validatePassword() {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>