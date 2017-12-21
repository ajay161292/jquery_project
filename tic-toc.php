<!DOCTYPE html>
<html>
<head>
	<title>Tic-Toc Game</title>
<style type="text/css">
table {
    border-collapse:collapse;
    /*width:150px;*/
    margin:0 auto;
    
  }

  td {
	    text-align: center;
	    line-height: 30px;
	    min-width: 150px;
	    height: 150px;	
	    font-size:5em;
    }
.turn {
    margin-bottom:10px;
  }
.circle:before {
        content:"o";
        color:pink;
      }
.cross:before {
        content:"x";
        color:lightblue;
      }    

      .abc{/*border:1px solid gray;
width:28px;
height:28px;*/
position:relative;}

/*.abc:after{
content: "";
    position: absolute;
    border-left: 1px solid red;
    height: 217px;
    transform: rotate(-45deg);
    transform-origin: 0% 0%;
    top: -89px;
    left: -1px;
}   

     .abc1{border:1px solid gray;
width:28px;
height:28px;
position:relative;}

.abc1:after{
content: "";
    position: absolute;
    border-left: 1px solid red;
    height: 217px;
    transform: rotate(-45deg);
    transform-origin: 0% 0%;
    top: -76px;
    left: -1px;
} */ 
</style>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var player = 1;
var table = $("table");
var message = $("#message");
var turn = $('.turn');
var finish = 1;

	$("td").click(function(){
		if(finish)
		{
			td = $(this);
			var state = getState(td);
	        if(!state) {
					var pattern = chooseplayerpattern(player);
					drawpattern(td,pattern);

					if(player == 1){
						player = 2;
					}
					else{
						player = 1;
					}
					// console.log(player);
					message.html('Player turn : '+player);	

					if(checkifplayerwon(table,pattern)){
						message.html('Player' +player + 'has won.' );
						finish = 0;
					}

					
			}
			else{
				message.html('This box is already checked.');
				}
		}
		else
			alert("Game is already finished.");

	});

});

function chooseplayerpattern(player){
	if(player == 1){
		return 'cross';
	}
	else{
		return 'circle';
	}
}
function drawpattern(td,pattern){
	return td.addClass(pattern);
}

function getState(td) {
	if(td.hasClass('cross') || td.hasClass('circle')) {
	  return 1;
	} else {
	  return 0;
	}
}
function checkifplayerwon(table,pattern){
	var winner = 0;
	if(table.find('#1').hasClass(pattern) && table.find('#2').hasClass(pattern) && table.find('#3').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#1').hasClass(pattern) && table.find('#4').hasClass(pattern) && table.find('#7').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#1').hasClass(pattern) && table.find('#5').hasClass(pattern) && table.find('#9').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#4').hasClass(pattern) && table.find('#5').hasClass(pattern) && table.find('#6').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#7').hasClass(pattern) && table.find('#8').hasClass(pattern) && table.find('#9').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#1').hasClass(pattern) && table.find('#5').hasClass(pattern) && table.find('#9').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#2').hasClass(pattern) && table.find('#5').hasClass(pattern) && table.find('#8').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#3').hasClass(pattern) && table.find('#5').hasClass(pattern) && table.find('#7').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#3').hasClass(pattern) && table.find('#2').hasClass(pattern) && table.find('#1').hasClass(pattern)){
		winner = 1;
	}
	else if(table.find('#3').hasClass(pattern) && table.find('#6').hasClass(pattern) && table.find('#9').hasClass(pattern)){
		winner = 1;
	}
	return winner;

}
function reset(){
	// reset(table);
	// td.removeClass('circle').removeClass('cross');
	window.location.reload();
}
</script>		
</head>

<body>
<button onclick="reset();" >Reset Game</button><br/></br>
<span id="message" class="message"></span><br/>
<div id="player" class="player"></div>
<table id="table" class="table" border="1" align="left" width="200" height="200">
	<tr>
		<td id="1" class="1"><div class="abc"></div></td>	
		<td id="2" class="2"><div class="abc1"></td>	
		<td id="3" class="3"></td>	
	</tr>
	<tr>
		<td id="4" class="4"></td>	
		<td id="5" class="5"><div class="abc"></td>	
		<td id="6" class="6"></td>	
	</tr>
	<tr>
		<td id="7" class="7"></td>	
		<td id="8" class="8"></td>	
		<td id="9" class="9"><div class="abc"></td>	
	</tr>
</table>

</body>
</html>
