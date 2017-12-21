
<!DOCTYPE html>
<html>
<head>
	<title>Triangles</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){

});
</script>		
</head>
<body>
<div id="div"></div>
</body>



<body>
<table>
	<?php
		for($i=0; $i <=4; $i++){			
			echo"<tr>";
			for($j=$i; $j>=0; $j--){
				echo"<td>*</td>";
			}
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		for($i=1;$i<=5;$i++)
		{
			echo"<tr>";
			for($j=$i;$j<=5;$j++){
				echo"<td>*</td>";
			}
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		for($i=0; $i <=4; $i++){			
			echo"<tr>";
			for($j=$i; $j>=0; $j--){
				echo"<td>*</td>";
			}
			echo"</tr>";
		}
		for($i=1;$i<=5;$i++)
		{
			echo"<tr>";
			for($j=$i;$j<=5;$j++){
				echo"<td>*</td>";
			}
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		for($i=1;$i<=5;$i++){
			echo"<tr>";
			
			for($k=1;$k<=$i;$k++){
				echo"<td>^</td>";
			}
			
			for($j=$i;$j<=5;$j++){
				echo"<td>*</td>";
			}
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		$m =1;
		for($i=1; $i<=5; $i++){
			echo"<tr>";
			for($k=$i; $k<=4; $k++){
				echo"<td></td>";
			}
			for($j=1; $j<=$m; $j++){
				echo"<td>*</td>";
			}
			for($l=$m; $l>1; $l--){
				echo"<td>*</td>";
			}
			// echo" ";
			$m++;
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		$m =1;
		for($i=9; $i>=1; $i--){
			echo"<tr>";

			for($k=1; $k<=$m; $k++){
				echo"<td> </td>";
			}
			for($j=$i; $j>=$m; $j--){
				echo"<td> *</td> ";
			}
			$m++;
			echo"</tr>";
		}
	?>
</table>
<br/><br/>
<table>
	<?php
		$m =1;
		$n =1; 
		for($i=1;$i<=5;$i++){
			echo"<tr>";
			for($l=$i;$l<=4;$l++){
				echo"<td> </td>";
			}
			for($j=1;$j<=$m;$j++){
				echo"<td>*</td>";
			}
			for($k=$m;$k>1;$k--){
				echo"<td>*</td>";
				
			}
			$m++;
			echo"</tr>";
			for($a=$m;$a>=1;$a--){
				echo"<tr>";
				// for($b=){

				// }
				echo"</tr>";
			}

		}

		// for($i=9; $i>=1; $i--){
		// 	echo"<tr>";

		// 	for($k=1; $k<=$n; $k++){
		// 		echo"<td> </td>";
		// 	}
		// 	for($j=$i; $j>=$n; $j--){
		// 		echo"<td> *</td> ";
		// 	}
		// 	$n++;
		// 	echo"</tr>";
		// }
	?>
</table>
<br/><br/>
</body>
</html>


