<!--  Write a JavaScript program to find 1st January is being a Sunday between 2014 and 2050. -->


<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){
	$("#fname").on("keyup",function(){
    	var fvalue = $(this).val();
    	console.log(fvalue);
		$("#firstname").html(fvalue);
	});
	$("#lname").keyup(function(){
    	var lvalue = $(this).val();
		$("#lastname").html(lvalue);
	});
	$("#phone").keyup(function(){
    	var phone = $(this).val();
		$("#phonee").html(phone);
	});	
});
	
</script>		

</head>

<body>

<label>First name :</label><input type="text" name="fname" id="fname"  /><br/>
<label>Last name :</label><input type="text" name="lname" id="lname" /><br/>
<label>Phone :</label><input type="text" name="phone" id="phone" />	

<br/><br/>

	<label>First name : </label><span id="firstname"></span><br/>
	<label>Last name : </label><span id="lastname"></span><br/>
	<label>Phone : </label><span id="phonee"></span>

</body>
</html>


