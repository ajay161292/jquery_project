<table id="mytable" border="1">
<thead>
	<tr>
		<th>Item</th><th>Quantity</th><th>Item Price</th><th>Addon</th><th>Subtotal</th>
	</tr>
</thead>
<tfoot>
    <tr>
	    <td></td><td></td><td></td>
	    <td>Total Count:
	    	<!-- <sapn id="grdcnt" class="grdcnt"></sapn> -->
	    	<input type="text" class="grdcnt" value="2" readonly="readonly" />
	    </td>
	    <td>Total Price:<span id="grdtot" class="grdtot"></span></td>
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
		<td><input type="checkbox" class="addon" value="20">addon(Rs.10/-)</td>
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
		// $('.quantity').change(function(){
		$(":input").bind('keyup mouseup', function () {

			$('table tbody tr').each(function(){
				
				var item_price = 0;
				var multiply = 0;

				var quantity = 0;
				quantity= $(this).find('.quantity').val();

				item_price = $(this).find('.item_price').val();
				multiply = Number(quantity)*Number(item_price);
				$(this).find('.subtotal').val(multiply);

				var itemprice = 0;
				var item_addon_price = 0;
				var cnt = $('input[type = checkbox]:checked').length;
				$(this).find('.addon').each(function(){
					if($(this).prop('checked') == true){
						itemprice = $(this).closest('tr').find('.subtotal').val();
						item_addon_price = Number(itemprice)+Number($(this).val());

						var grtcnt = $('.grdcnt').val();
						var newgrtcnt = Number(grtcnt)+Number(cnt);
						$('.grdcnt').val(newgrtcnt);
					}
					else{
						itemprice = $(this).closest('tr').find('.subtotal').val();
						item_addon_price = Number(itemprice);
						$('.grdcnt').val();
					}
					$(this).closest('tr').find('.subtotal').val(Number(item_addon_price));
				})

				var total_price = 0;
				var total_items = 0;	
				$('.subtotal').each(function(){
					total_price += Number(this.value);
					$('.grdtot').text(total_price);
				})
	
			})
		})
		
	});
</script>	