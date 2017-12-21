<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table id="mytable" border="1">
	<thead>
		<tr>
			<th>Item</th>
			<th>Price</th>
			<th>Addon</th>
			<th>Total Items</th>
			<th>Sub Total</th>
		</tr>
		
	</thead>
	<tfoot>
	    <tr>
		    <td></td><td></td><td></td>
		    <td><input type="text" id="grdcnt" class="grdcnt" value="" name=""/></td>
		    <td><input type="text" id="grdtot" class="grdtot" value="" name=""/></td>
	    </tr>
	</tfoot>
	<tbody>
		<tr>
			<td>Item-1</td>
			<td><input type ="text" id="price1" class="p" name="price" value="99" /></td>
			<td><input type="checkbox" id="addon_1" class="addons a1" name="addon" value="109" />10</td>
			<td><span id="total_items" class="total_items">0</span></td>	
			<td><span id="total_price" class="total_price">0</span></td>
		</tr>
		<tr>
			<td>Item-2</td>
			<td><input type ="text" id="price2" class="p" name="price" value="200" /></td>
			<td> <input type="checkbox" id="addon_2" class="addons a2" name="addon" value="220" />20</td>
			<td><span id="total_items" class="total_items">0</span></td>	
			<td><span id="total_price" class="total_price">0</span></td>
		</tr>		
	</tbody>
</table>	
</body>
</html>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
			var total_price = 0;
				var total_items = 0;
			$(".addons").change(function(){
				total_price = 0;
				total_items = 0;
				$(".addons").each(function(){
					if($(this).prop('checked') == true){
						total_price = Number(total_price) + Number($(this).val());
						total_items = Number(total_items) + 1;
					}
				})
				$('.grdcnt').val(total_items);
				$('.grdtot').val(total_price);
				
				$('table tr').each(function(){
					var tr_item = 0;
					var tr_total = 0;
					$(this).find('.addons').each(function(){
						if($(this).prop('checked') == true){
							tr_total = Number(tr_total) + Number($(this).val());
							tr_item = Number(tr_item) + 1;
						}
					})
					$(this).find('.total_items').html(tr_item);
					$(this).find('.total_price').html(tr_total);
				})
			})
		
		});
	// function updateprice(addonclass){
	// 			var total = 0;
	// 			var cnt = 0;
	// 			var amount = 0;
	// 			$('#mytable > tbody > tr').each(function(){
					
	// 				// if($(this).find('.addons').checked){
							
	// 						var item_count = $(this).find('.p').length;
	// 						var addon_count = $(this).find('.addons').length;
	// 						var count=parseInt(item_count+addon_count);
	// 						// console.log(count);	
	// 						var item_price = $(this).find('.p').val();
	// 						var addon_price = $(this).find('.addons').val();
	// 					// if(addonclass == 'a1'){	
	// 					// 	var item_price = $(this).first().find('.p').val();
	// 					// 	var addon_price = $(this).first().find('.addons').val();
	// 					// 	// console.log($(this).first().find('.addons').val());return false;
	// 					// 	amount=parseInt(item_price)+parseInt(addon_price);
	// 					// 	console.log(amount);
	// 					// 	return amount;
	// 					// }
	// 					// else if(addonclass == 'a2'){
	// 					// 	// console.log($(this).next().find('.p').val());
	// 					// 	var item_price = $(this).find('.p').val();
	// 					// 	var addon_price = $(this).next().find('.addons').val();	
	// 					// 	// console.log($(this).next().find('.addons').val());return false;
	// 					// 	amount=parseInt(item_price)+parseInt(addon_price);
	// 					// 	console.log(amount);
	// 					// 	return amount;
	// 					// }
	// 					// else{
	// 					// 	var item_price = $(this).find('.p').val();
	// 					// 	var addon_price = $(this).find('.addons').val();
	// 					// }
	// 						var amount=parseInt(item_price)+parseInt(addon_price);
	// 						console.log(amount);
	// 						total+=parseInt(amount);
	// 						cnt+=parseInt(count);
	// 						// console.log(typeof(total));
	// 						$(this).find('.total_items').text(''+count);
	// 						$(this).find('.total_price').text(''+amount);
	// 						document.getElementById('grdtot').value = parseInt(total);
	// 						document.getElementById('grdcnt').value = parseInt(cnt);
	// 					// }


	// 			})
	// 		}
		
	
</script>