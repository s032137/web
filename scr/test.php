<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"       
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">       
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">       
<head>       
<meta http-equiv="content-type" content="text/html; charset=utf-8" />       
<title>JavaScript Checkbox - onclick() method example</title>       
<script type="text/javascript">       
//This is done to make the following JavaScript code compatible to XHTML. <![CDATA[      
function Applealert()      
{      
if(document.Form1.checkbox1.checked == true)      
{      
alert("You have clicked on Apple.");      
}      
}      
function Orangealert()      
{      
if(document.Form1.checkbox2.checked == true)      
{      
alert("You have clicked on Orange.");      
}      
} 
//]]>       
</script>       
</head>       
<body>       
<h1 style="color: red">JavaScript Checkbox Object's Event handler : onclick</h1>       
<h3>Click on the Checkbox ... and see the onclick effect ....</h3>       
<hr />  
<form name="Form1" style="color: green ; font-size: 150%" action = "#">       
<input type="checkbox"       
name="checkbox1"        
onclick = "Applealert()" />Apple       
<br />  
<input type="checkbox"       
name="checkbox2"       
onclick = "Orangealert()" />Orange       
</form>       
</body>       
</html>  