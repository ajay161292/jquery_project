<table id="mytable" border="1">
<thead>
	<tr>
		<th>Item</th><th>Quantity</th><th>Item Price</th><th>Addon</th><th>Subtotal</th>
	</tr>
</thead>
<tfoot>
    <tr>
	    <td></td><td></td><td></td>
	    <td>Total Addons:
	    	<!-- <sapn id="grdcnt" class="grdcnt"></sapn> -->
	    	<input type="text" class="grdcnt" value="" readonly="readonly" />
	    </td>
	    <td>Total Price:
	    	<!-- <span id="grdtot" class="grdtot"></span> -->
	    	<input type="text" class="grdtot" value="" readonly="readonly" />
	    	</td>
    </tr>
</tfoot>
<tbody>
	<tr>
		<td>Item-1</td>
		<td><input type="number" name="" class="quantity" value="1"></td>
		<td><input type="text" name="" class="item_price" value="100" readonly="readonly"></td>
		<td><input type="checkbox" class="addon" value="10">addon(Rs.10/-)</td>
		<td>
			<!-- <sapn class="subtotal">0</sapn> -->
			<input type="text" class="subtotal" value="100" readonly="readonly" />
			</td>
	</tr>
	<tr>
		<td>Item-2</td>
		<td><input type="number" name="" class="quantity" value="1"></td>
		<td><input type="text" name="" class="item_price" value="200" readonly="readonly"></td>
		<td><input type="checkbox" class="addon" value="20">addon(Rs.20/-)</td>
		<td>
			<!-- <sapn class="subtotal">0</sapn> -->
			<input type="text" class="subtotal" value="200" readonly="readonly" />
		</td>
	</tr>	
</tbody>	
</table>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var total_price = 0;
		$('.subtotal').each(function(){
			total_price += Number(this.value);
			$('.grdtot').val(total_price);
		})
		$('.quantity').change(setquantityprice);
		$('.addon').click(function(){
			var count = $('input:checkbox:checked').length;
			$('.grdcnt').val(count);

			if($(this).is(':checked')){
				var addonval = $(this).val();
				var itemprice = $(this).closest('tr').find('.subtotal').val();
				$(this).closest('tr').find('.subtotal').val(Number(itemprice)+Number(addonval));
			}
			else{
				var addonval = $(this).val();
				var itemprice = $(this).closest('tr').find('.subtotal').val();
				$(this).closest('tr').find('.subtotal').val(Number(itemprice)-Number(addonval));
			}
			var total_price = 0;
			$('.subtotal').each(function(){
				total_price += Number(this.value);
			$('.grdtot').val(total_price);
			})
		})		
	});
	function setquantityprice(){
		var total_price = 0;
		var total_items = 0;
		var itemprice = 0;
		var multiply = 0;
		var quantity = 0;
		var addonprice = 0;
			
			quantity = $(this).closest('tr').find('.quantity').val();
			// alert(quantity);
			itemprice = $(this).closest('tr').find('.item_price').val();
			// if($('.addon').prop('checked') == true){
			if($('.addon').is(':checked')){
				addonprice = $(this).closest('tr').find('.addon').val();
				console.log(addonprice);
				addonprice = Number(addonprice);
			}
			addonprice = Number(addonprice)
			multiply = Number(quantity)*Number(itemprice);
			multiply = multiply+addonprice;
			console.log(multiply);
			$(this).closest('tr').find('.subtotal').val(multiply);	

		$('.subtotal').each(function(){
			total_price += Number(this.value);
			$('.grdtot').val(total_price);
		})
	}

	// function setquantityprice(){
	// 	// console.log($(this).val());
	// 	var total_price = 0;
	// 	var total_items = 0;
	// 	$('table tbody tr').each(function(){
	// 		var itemprice = 0;
	// 		var multiply = 0;
	// 		var quantity = 0;

	// 		quantity = $(this).find('.quantity').val();
	// 		alert(quantity)
	// 		itemprice = $(this).find('.item_price').val();
	// 		// console.log(itemprice);
	// 		multiply = Number(quantity)*Number(itemprice);
	// 		console.log(multiply);
	// 		$(this).find('.subtotal').val(multiply);
			
	// 	})

	// 	$('.subtotal').each(function(){
	// 		total_price += Number(this.value);
	// 		$('.grdtot').val(total_price);
	// 	})
	// }
	// function setaddonprice(){
	// 	// console.log($(this).val());
	// 	var total_price = 0;
	// 	var total_items = 0;
	// 	var itemprice = 0;
	// 		$(".addon").each(function(){
	// 			if($(this).prop('checked') == true){
	// 					var findcnt = $('.grdcnt').val();
	// 					total_items = Number(findcnt)+1;
						
	// 					total_price = Number($(this).val());
	// 					console.log(total_price);	
	// 					itemprice = $(this).closest('tr').find('.subtotal').val();
	// 					itemprice = Number(itemprice)+Number($(this).val());
	// 					console.log('itemprice'+itemprice)
	// 					$(this).closest('tr').find('.subtotal').val(itemprice)
					
	// 			}
	// 			else if($(this).prop('checked') == false){
	// 				total_items = 2;
	// 			}
	// 		})
	// 		$('.grdcnt').val(total_items);
	// 		$('.subtotal').each(function(){
	// 			total_price += Number(this.value);
	// 			$('.grdtot').val(total_price);
	// 		})
	// 		// $('table tbody tr').each(function(){
	// 		// 	var itemprice = 0;
	// 		// 	var item_addon_price = 0;
	// 		// 	$(this).find('.addon').each(function(){
	// 		// 		if($(this).prop('checked') == true){
	// 		// 			itemprice = $(this).closest('tr').find('.subtotal').val();
	// 		// 			itemprice = Number(itemprice)+Number($(this).val());
	// 		// 			console.log('itemprice'+itemprice)
	// 		// 		}
	// 		// 	})
	// 		// 	// $(this).closest('tr').find('.subtotal').val(Number(itemprice));	
	// 		// 	// $(this).find('.subtotal').val(itemprice);
	// 		// 	// $(this).find('.subtotal').val(itemprice);
	// 		// })
	// }

</script>	