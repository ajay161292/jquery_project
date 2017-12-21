<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="checkbox" class="item" name="item" value="10" onclick="addprice();" />Item-1(Rs.10)<br/>
<input type="checkbox" class="item" name="item" value="20" onclick="addprice();" />Item-2(Rs.20)<br/>
<input type="checkbox" class="item" name="item" value="30" onclick="addprice();" />Item-3(Rs.30)<br/>
<input type="checkbox" class="item" name="item" value="40" onclick="addprice();" />Item-4(Rs.40)<br/>
<input type="checkbox" class="item" name="item" value="50" onclick="addprice();" />Item-5(Rs.50)<br/>
<input type="checkbox" class="item" name="item" value="60" onclick="addprice();" />Item-6(Rs.60)<br/>
<input type="checkbox" class="item" name="item" value="70" onclick="addprice();" />Item-7(Rs.70)<br/>
<input type="checkbox" class="item" name="item" value="80" onclick="addprice();" />Item-8(Rs.80)<br/>
<input type="checkbox" class="item" name="item" value="90" onclick="addprice();" />Item-9(Rs.90)<br/>
<input type="checkbox" class="item" name="item" value="100" onclick="addprice();" />Item-10(Rs.100)<br/>
Total Items:<input type="text" id="totalcount" name="" readonly="readonly" value="" /><br/>
Total Price:<input type="text" id="totalprice" name="" readonly="readonly" value="" />
</body>
</html>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	})
	function addprice(){
		var count = $('input:checkbox:checked').length;
		// console.log(count);
		var input = document.getElementsByName('item');
		var total = 0;
		for(var i=0;i<input.length;i++){
			if(input[i].checked){
				total += parseFloat(input[i].value);
				console.log(total);
			}
		}
		document.getElementById('totalcount').value = count;
		document.getElementById('totalprice').value = total;
	}
</script>