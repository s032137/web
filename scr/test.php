<html>
<head>
<style>
#warning {color:red; display:none;}
</style>
<script>
function validate() {
    var warning = document.getElementById("warning");
    
	//username
	var username = document.getElementById("username");
	if(username.value == "" ){
		//alert("Username!!");
		warning.style.display = "initial";
		return false;
	}
	
	//password
	var password = document.getElementById("password");
	if(password.value == "") {
        warning.style.display = "initial";
        return false;
    
    }	
	
	//select
	var select = document.getElementsByTagName("select");
	var subject = select[0];
	if(subject.value !="oop" && subject.value !="ip") {
        warning.style.display = "initial";
        return false;    
    }	

	
	
	//pass
	
	var radioBtns = document.getElementsByName("pass");
	var radioBtnsChecked = false;
	for(var i = 0;i<radioBtns.length;i++){
		if(radioBtns[i].checked) {
			radioBtnsChecked = true;
			break;
		}
	}
		
	if(!radioBtnsChecked){
		warning.style.display = "initial";
        return false;  	
	}
	/*
	//remark
	var remark = document.getElementById("remark");
	if(remark.value == "") {
		warning.style.display = "initial";
        return false;
    
    }	
	 
    /*
	//acc
	var checkbox = document.getElementsByName("acc[]");
	var checkboxChecked = false;
	for(var i = 0;i<checkbox.length;i++){
		if(checkbox[i].checked) {
			checkboxChecked = true;
			break;
		}
	}
		
	if(!checkboxChecked){
		warning.style.display = "initial";
        return false;  	
	}
	
	*/
	
	

	

}
</script>
</head>

<body>

<form method="post" action="lab12.php" onsubmit="return validate()">
    
	<h1>Survey</h1>
	
	<p id="warning">Please enter all required fields</p>
	<p>Username: <input type="text" id="username" name="username" /></p>
	<p>Password: <input type="password" id="password"name="password" /></p>

	<p>Select one subject:
		<select name="subject">
			<option value="oop">Object Oriented Programming</option>
			<option value="ip">Internet Programming</option>
		</select></p>

	<p>Pass?:<br/>
		<input type="radio" name="pass" value="y"/> Yes
		<input type="radio" name="pass" value="n"/> No</p>

	<p>Assessment:
		<input type="checkbox" name="acc[]" value="ca"/> CA
		<input type="checkbox" name="acc[]" value="ea"/> EA</p>

	<p>Remarks: <textarea id="remark" name="remark"></textarea></p>

	<p><input type="submit" name="submit" /></p>

</form>

</body>
</html>