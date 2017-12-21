<!--  Write a JavaScript program to find 1st January is being a Sunday between 2014 and 2050. -->


<!DOCTYPE html>
<html>
<head>
	<title>Find & Replace</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">
.selected {
    color: red;
  }
  .highlight {
    background: yellow;
  }
</style>

<script type="text/javascript">
$(document).ready(function(){
	
	// $("#search_btn").click(function(){

	// 	var testStr = $("p").text();
	// 	var find = $("#find").val();		
		
	// 	if(find == ""){
	// 		alert("please enter word to find");
	// 		$("#find").focus();
	// 	}
	// 	else if(find != ""){
		
	// 		var includes = testStr.includes(find); // true of false
	// 		if(includes){
	// 			alert("word found");
			
	// 			// testStr.html(testStr.html().replace("/"+find+"/", '<span style="color: red">$&</span>'));
	// 			var found_words= $( "#original:contains("+find+")" ).css( "text-decoration", "underline" );
	// 			$("#changed").html(found_words);
				
	// 		}
	// 	}	
	// });

	$("#replace_btn").click(function(){
		
		var testStr = $("p").text();
		var find = $("#find").val();
	
		var replace = $("#replace").val();
	
		if(find == "" || replace == ""){
			alert("please enter word to replace ");
			$("#replace").focus();
		}		
		else if(replace != ""){
			$("#changed").html($("#original").html().replace(new RegExp(find, 'g'),"<span class='highlight'>"+replace+"</span>"));
		
		}
	});
});
	
</script>		
</head>

<body>
<label>Find :</label><input type="text" name="find" id="find"><br/>
<label>Replace :</label><input type="text" name="replace" id="replace"><br/>
<!-- <button type="button" id="search_btn">Search</button> -->
<button type="button" id="replace_btn">Search & Replace</button><br/><br/>

<p id="original">
	Ajay parmar ajay sit amet, consectetur adipiscing elit. Nam massa felis, sagittis sed leo sed, tristique lacinia nulla. Mauris ultrices arcu gravida, lacinia arcu et, pretium dui. Donec quis vestibulum mi, sit amet egestas ante. Proin id nunc eget urna semper euismod. Aliquam ac purus nec enim semper iaculis at id ex. Etiam sed quam lobortis, vehicula nulla eu, interdum libero. Etiam id sapien hendrerit, vestibulum augue sit amet, blandit ligula. Donec non dictum mauris. Sed vitae commodo neque. Quisque est erat, gravida quis congue eget, ajay in eros. Vestibulum eros dolor, dignissim ac <b>accumsan</b> ac, efficitur in nisl. Fusce ajay aliquet erat. Aenean interdum augue nisl, eu pharetra lorem scelerisque sed. Duis ut maximus massa, et euismod nisl.
</p>
<br/><br/>
<div id="changed"></div>
	

</body>
</html>


