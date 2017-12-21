<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#above").click(function(){
		$("ol").prepend("<span id='span_above' class='span_above'><li><b>ABOVE</b><button id='remove_above' onclick='remove_above(this);'>Remove</button></li></span>");		 
		// $("<li><b>ABOVE</b><button id='remove_above' onclick='remove_above();'>Remove</button></li>").appendTo(".div_above");		 		
	});

	$("#below").click(function(){
		$("ol").append("<span id='span_below' class='span_below'><li><b>BELOW</b><button id='remove_below' onclick='remove_below(this);'>Remove</button></li></span>");		 
		// $("<li><b>BELOW</b><button id='remove_below' onclick='remove_below();'>Remove</button></li>").appendTo(".div_below");		 
	});

	$("#left").click(function(){
		$("p").prepend("<span id='span_left' class='span_left'><b>LEFT</b><button id='remove_left' onclick='remove_left(this);'>Remove</button></span>");		 
		// $("<b>LEFT</b><button id='remove_left' onclick='remove_left();'>Remove</button>").appendTo(".div_left");
	});

	$("#right").click(function(){
		$("p").append("<span id='span_right' class='span_right'><b>RIGHT</b><button id='remove_right' onclick='remove_right(this);'>Remove</button></span>");	 
		// $("<b>RIGHT</b><button id='remove_right' onclick='remove_right();'>Remove</button>").appendTo(".div_right");

	});


});
var remove_above = function(){
		// $("#div_above").remove();
		$("#span_above").remove();
}
var remove_below = function(){
		// $("#div_below").remove();
		$("#span_below").remove();		
}
var remove_left = function(){
		// $("#div_left").remove();
		$("#span_left").remove();
}	
var remove_right = function(){
		// $("#div_right").remove();
		$("#span_right").remove();
}
</script>		

</head>

<body>
<button class="above" id="above">Add above</button><br/><br/>
<button class="below" id="below">Add below</button></br><br/>
<button class="left" id="left">Add left</button></br><br/>
<button class="right" id="right">Add right</button></br>


<span id="span_above" class="span_above"></span>
<ol align="left" id="paragraph" class="paragraph">
	<li>this is list</li>
</ol>
<span id="span_below" class="span_below"></span>

<span id="span_left" class="span_left"></span>
<span id="span_right" class="span_right"></span>

<p>this is paragraph</p>


</body>
</html>
