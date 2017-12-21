
<!DOCTYPE html>
<html>
<head>
	<title>Day & Date</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){


});

function getvalue(){
	
	// var value = document.forms["f1"]["number"].value;
	var value = document.getElementById('number').value;
	// alert(value);
	if(value != ""){	
		if(isNaN(value) || value > 10 || value < 0){
			alert("please enter number between 1 to 10")
			
		}
		else{

			var pattern = "";
			for(var i=1;i<=10;i++){
				var v = value * i ;
				
				pattern = pattern + "<div>"+value+ "&nbsp;&nbsp;*&nbsp;&nbsp;" +i+ "&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;&nbsp;"
										+v+"</div>";
				// alert(pattern);
				 
			}
			document.getElementById('div').innerHTML = pattern;
			// console.log(value);
		}
	}
}
</script>		
</head>

<body>
	<form name="f1" id="f1" method="post">
	<input type="text" name="number" id="number">
	<button type ="button" id="submit" onclick="getvalue();">Submit</button>
	</form>
	<div id="div"></div>
</body>
</html>


