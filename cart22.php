<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div id="item1" class="item1"><b><u>Item -1</u></b></div><br/>
		<div id="price1" class="p1" name="price" >Price ::: Rs.99</div>
		 + addon(Rs.10/-) 
		 <input type="checkbox" class="addons" name="addon" value="109" /><br/>
	
		<div id="item2" class="item2"><b><u>Item -2</u></b></div><br/>
		<div id="price2" class="p2" name="price" >Price ::: Rs.200</div>
		 + addon(Rs.10/-) 
		 <input type="checkbox" class="addons" name="addon" value="210" /><br/>
	</div>
	<div>
		<div id="total_cart" class="total_cart"><b><u>Total Cart</u></b></div><br/>
		Total Items:<span id="" class="total_items">0</span><br/>
		Total Price:<span id="" class="total_price">0</span><br/>
	</div>
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
				$('.total_items').html(total_items);
				$('.total_price').html(total_price);

					if($(this).is(':checked')){	
						// var addonprice = $(this).val();
						var addonprice = 10;
						$(this).prev().append("<label class='addon_price'> + "+addonprice+"</label>");
					}
					else{
						$(".addon_price").remove();
					}
		
			})
			
		});
</script>