
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
	#droppable td{
		width:65px;
		height: 65px;
	}
</style>

<script type="text/javascript">
$(document).ready(function(){

	dragg = $("#draggable");
	td = $(".drag");
	td_drop = $(".drop");
	// table.draggable();
	// $('td').draggable();
	
	td.draggable({
		drag: function( event, ui ) {
		td = $(this);
		var td_id = td.attr("id");
		// var pos = $(this).position();
		// console.log(pos);
      },
      // revert : function(event, ui) {
      //       // on older version of jQuery use "draggable"
      //       // $(this).data("draggable")
      //       // on 2.x versions of jQuery use "ui-draggable"
      //       // console.log($(this).data("ui-draggable"));	
      //       var pos = $(this).position();
      //       // console.log(pos);
      //       $(this).data("ui-draggable").originalPosition = {
      //           top : pos.top,
      //           left : pos.left
      //       };
      //       // return boolean
      //       // $(this).animate({top:pos.top,left:pos.left},'slow');
      //   	// return !event;
      //       return !event;
          
      //   }
      revert:  function(dropped) {
             var $draggable = $(this),
                 hasBeenDroppedBefore = $draggable.data('hasBeenDropped'),
                 wasJustDropped = dropped && dropped[0].id == "droppable";
             if(wasJustDropped) {
                 // don't revert, it's in the droppable
                 return false;
             } else {
                 if (hasBeenDroppedBefore) {
                     // don't rely on the built in revert, do it yourself
                     $draggable.animate({ top: 0, left: 0 }, 'slow');
                     return false;
                 } else {
                     // just let the build in work, although really, you could animate to 0,0 here as well
                     return true;
                 }
             }
        }
	});

	var droppable = $('.drop');
	droppable.droppable({
      	drop: function(event, ui) {
      			var td_id = td.attr("id");
      			// console.log($(this).attr("id"));
      			var cur_id = $(this).attr("id");
				
				if(td_id == cur_id){
					td.removeAttr("style");
					td.removeClass("drag");
					// td.remove("td");
					// console.log(event);
					td.appendTo("#droppable #"+cur_id);
					alert("moved");	
			}
			else{
				// console.log(event);
				// alert("please select proper box");
				// td.draggable({
    //                 revert : function(event, ui) {
    //                 	alert(1221);
    //                 	var pos = $(this).position();
    //                 	console.log( $(this).attr("id"));
    //                     // $(this).attr("id").originalPosition = {
    //                     //     top : pos.top,
    //                     //     left : pos.left
    //                     // };

    //                 }
    //             });
			}
				
      }
	});
	
});

</script>		

</head>

<body>

<div id="draggable" class="draggable" width="200" height="200">
	<span id="1" class="drag">1</span>
	<span id="2" class="drag">2</span>
	<span id="3" class="drag">3</span>
	<span id="4" class="drag">4</span>
	<span id="5" class="drag">5</span>
	<span id="6" class="drag">6</span>
	<span id="7" class="drag">7</span>
	<span id="8" class="drag">8</span>
	<span id="9" class="drag">9</span>	
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
