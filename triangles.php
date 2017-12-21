
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

var table = "<table>";
for(var i=0; i <=4; i++){			
	// table = table + "</tr>";
	for(var j=i; j>=0; j--){
		table = table + "<td>*</td>";
	}
	table = table + "</tr>";
}
table += "</table><br/><br/>";
document.write(table + "<br/>");
	

table2 = "<table>";
for(var i=1;i<=5;i++)
		{
			table2 = table2 + "<tr>";
			for(var j=i;j<=5;j++){
				table2 = table2+ "<td>*</td>";
			}
			table2 = table2 + "</tr>";
		}
table2 +="</table><br/><br/>";

document.write(table2);


table3 = "<table>";
for(var i=0; i <=4; i++){			
			table3 = table3 + "<tr>";
			for(var j=i; j>=0; j--){
				table3 = table3 + "<td>*</td>";
			}
			table3 = table3 + "</tr>";
		}
		for(var i=1;i<=5;i++)
		{
			table3 = table3 + "<tr>";
			for(j=i;j<=5;j++){
				table3 = table3 + "<td>*</td>";
			}
			table3 = table3 + "</tr>";
		}
table3 += "</table><br/><br/>";
document.write(table3);

table4 = "<table>";
for(var i=1;i<=5;i++){
			table4 = table4 + "<tr>";
			
			for(var k=1;k<=i;k++){
				table4 = table4 +"<td>^</td>";
			}
			
			for(var j=i;j<=5;j++){
				table4 = table4 +"<td>*</td>";
			}
			table4 = table4 +"</tr>";
		}
table4 += "</table><br/><br/>";
document.write(table4);


table5 = "<table>";
for(var i=1;i<=5;i++){
			table5 = table5 + "<tr>";
			
			for(var k=1;k<=i;k++){
				table5 = table5 +"<td>^</td>";
			}
			
			for(var j=i;j<=5;j++){
				table5 = table5 +"<td>*</td>";
			}
			table5 = table5 +"</tr>";
		}
table5 += "</table><br/><br/>";
document.write(table5);

table6 = "<table>";
var m =1;
		for(var i=1; i<=5; i++){
			table6 = table6 + "<tr>";
			for(var k=i; k<=4; k++){
				table6 = table6 + "<td></td>";
			}
			for(var j=1; j<=m; j++){
				table6 = table6 + "<td>*</td>";
			}
			for(var l=m; l>1; l--){
				table6 = table6 + "<td>*</td>";
			}
			m++;
			table6 = table6 + "</tr>";
		}
table6 += "</table><br/><br/>";
document.write(table6);

table7 = "<table>";
	var m =1;
		for(var i=9; i>=1; i--){
			table7 = table7 + "<tr>";

			for(var k=1; k<=m; k++){
				table7 = table7 + "<td> </td>";
			}
			for(var j=i; j>=m; j--){
				table7 = table7 + "<td> *</td> ";
			}
			m++;
			table7 = table7 + "</tr>";
		}
table7 += "</table><br/><br/>";
document.write(table7);
</script>		
</head>
<body>
<div id="div"></div>
</body>



</body>
</html>

