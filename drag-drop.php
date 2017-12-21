
<!DOCTYPE html>
<html>
<head>
	<title>Drag & Drop</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<style type="text/css">
	
	.table{
		width: 200px;
	    height: 200px;
	    /*padding: 50px;*/
	    border: 1px solid red;
	    float: left;
	}

	div{
		width: 200px;
	    height: 200px;
	    /*padding: 50px;*/
	    border: 1px solid red;
	    float: left;
	}
	.drag{
		display: inline-block;
		width: 55px;
		height: 55px;
		border: 1px solid #000;
		margin: 2px;
		text-align: center;
		line-height: 50px;
	}
</style>

<script type="text/javascript">
$(document).ready(function(){

	table = $("#table");
	td = $(".drag");
	td_drop = $(".drop");
	// table.draggable();
	// $('td').draggable();
	
	td.draggable({
		drag: function( event, ui ) {
		td = $(this);
		var td_id = td.attr("id");
		// console.log(td_id);
      }
	});

	var droppable = $('#droppable');
	droppable.droppable({
      	drop: function(event, ui) {
      		var td_id = td.attr("id");
			// console.log(td_id);
			if(td_id == 1){
				var droppable_id = $('#droppable').find('#1');
				// console.log(droppable_id);
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("one drag");
					// td.remove("td");
					// td.remove();
					td.appendTo(".one");
					alert("moved");
				}
			}
			else if(td_id == 2){
				var droppable_id = $('#droppable').find('#2');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("two drag");
					// td.remove("td");
					td.appendTo(".two");
					alert("moved");
				}
			}
			else if(td_id == 3){
				var droppable_id = $('#droppable').find('#3');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("three drag");
					// td.remove("td");
					td.appendTo(".three");
					alert("moved");
				}
			}
			else if(td_id == 4){
				var droppable_id = $('#droppable').find('#4');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("four drag");
					// td.remove("td");
					td.appendTo(".four");
					alert("moved");
				}
			}	
			else if(td_id == 5){
				var droppable_id = $('#droppable').find('#5');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("five drag");
					// td.remove("td");
					td.appendTo(".five");
					alert("moved");
				}
			}
			else if(td_id == 6){
				var droppable_id = $('#droppable').find('#6');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("six drag");
					// td.remove("td");
					
					td.appendTo(".six");
					alert("moved");
				}
			}
			else if(td_id == 7){
				var droppable_id = $('#droppable').find('#7');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("seven drag");
					// td.remove("td");
					td.appendTo(".seven");
					alert("moved");
				}
			}
			else if(td_id == 8){
				var droppable_id = $('#droppable').find('#8');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("eight drag");
					// td.remove("td");
					td.appendTo(".eight");
					alert("moved");
				}
			}
			else if(td_id == 9){
				var droppable_id = $('#droppable').find('#9');
				if(td_id = droppable_id){
					td.removeAttr("style");
					td.removeClass("nine drag");
					// td.remove("td");
					td.appendTo(".nine");
					alert("moved");
				}
			}
	    	
	    	// alert("All Boxes Are Dropped!" );
	    	// return false;
      }
	});
	
	


});

</script>		

</head>

<body>
<!-- <table id="table" class="table" border="1" width="200" height="200">
	<tr>
		<td id="1" class="one drag" align="center">1</td>	
		<td id="2" class="two drag" align="center">2</td>	
		<td id="3" class="three drag" align="center">3</td>	
	</tr>
	<tr>
		<td id="4" class="four drag" align="center">4</td>	
		<td id="5" class="five drag" align="center">5</td>	
		<td id="6" class="six drag" align="center">6</td>	
	</tr>
	<tr>
		<td id="7" class="seven drag" align="center">7</td>	
		<td id="8" class="eight drag" align="center">8</td>	
		<td id="9" class="nine drag" align="center">9</td>	
	</tr>
</table>
 -->
<div id="table" class="table" width="200" height="200">
	<span id="1" class="one drag">1</span>
	<span id="2" class="two drag">2</span>
	<span id="3" class="three drag">3</span>
	<span id="4" class="four drag">4</span>
	<span id="5" class="five drag">5</span>
	<span id="6" class="six drag">6</span>
	<span id="7" class="seven drag">7</span>
	<span id="8" class="eight drag">8</span>
	<span id="9" class="nine drag">9</span>	
</div>
<table id="droppable" class="droppable" border="1" width="200" height="200">	
	<tr>
		<td id="1" class="one drop" align="center"></td>	
		<td id="2" class="two drop" align="center"></td>	
		<td id="3" class="three drop" align="center"></td>	
	</tr>
	<tr>
		<td id="4" class="four drop" align="center"></td>	
		<td id="5" class="five drop" align="center"></td>	
		<td id="6" class="six drop" align="center"></td>	
	</tr>
	<tr>
		<td id="7" class="seven drop" align="center"></td>	
		<td id="8" class="eight drop" align="center"></td>	
		<td id="9" class="nine drop" align="center"></td>	
	</tr>
</table>
</body>
</html>
