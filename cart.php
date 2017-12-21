<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="select_items">
		<div id="item1" class="item1"><b><u>Item -1</u></b></div><br/>
		<div id="price1" class="p1" name="price[]" data-price="99">Price ::: Rs.99</div>
		 + addon(Rs.10/-) <input type="checkbox" class="addon a1" id="addon1" name="addon[]" data-addon="10" /><br/>
	
		<div id="item2" class="item2"><b><u>Item -2</u></b></div><br/>
		<div id="price2" class="p2" name="price[]" data-price="200">Price ::: Rs.200</div>
		 + addon(Rs.10/-) <input type="checkbox" class="addon a2" id="addon2" name="addon[]" data-addon="10" /><br/>
	</div>
	<div>
		<div id="total_cart" class="total_cart"><b><u>Total Cart</u></b></div><br/>
		<!-- <div id="" class="total_items" data-price="">Total Items</div><br/> -->
		<div id="" class="total_price" data-price="">Total Price:::</div><br/>
	</div>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var item_price = '';
		var addon_price = '';
		var cart_total = '';
		var item1_price = ($(".p1").data("price")) + $(".a1").data("addon");
		var item2_price = ($(".p2").data("price")) + $(".a2").data("addon");
		var all_price = item1_price+item2_price;
		var sum = 0;
		var sum1 = 0;
		var sum2 = 0;
		var sum3 = 0;
		// var totalprice = price1+price2;
		$(".addon").on('change', function(){
				// var addonclass = $(this).attr("class").split(' ')[1];
				// if($(".a1").is(":checked") || $(".a2").is(":checked")){
				if($(this).is(":checked") ){

					var addonclass = $(this).attr("class").split(' ')[1];
					var setdivclass =  $(this).prev();
					item_price = setdivclass.data("price");
					addon_price = $(this).data("addon");
					cart_total = [{name:'addon[]',value:addon_price},{name:'price[]',value:item_price}];
						$.each(cart_total, function(key,value){
							sum1 += value.value;
							sum = sum1;
							console.log("checked"+sum1);
							return sum1;	
						});
						alert(1);
						setdivclass.append(' <span class="addon_'+addonclass+'">+ Rs.'+addon_price+' </span>');
						$(".total_price").append(' <span class="totalprice">'+ sum1 +'</span>');
				}
				if($(".a1").is(":checked") && $(".a2").is(":checked")){
					alert("both");
					console.log(sum1);
					// console.log(sum2);
					// sum3 = sum1+sum2;
					sum3 = sum1;
					console.log("total "+sum3);
					// sum = sum3;
					// $(".total_price").append(' <span class="totalprice">'+ sum3 +'</span>');
					$(".total_price").replaceWith(' <span class="totalprice">'+ sum3 +'</span>');
					return sum3;		
				}

				if($(".a1").is(":checked") == false  && $(".a2").is(":checked") == false){
					sum = 0;
					$(".addon_a1").remove();
					$(".addon_a2").remove();
					$(".totalprice").replaceWith(' <span class="totalprice">'+ sum +'</span>');
					return sum;	
						
				}
				if($(".a1").is(":checked") == false){
					// console.log(sum1);
					// console.log(sum3);
					// console.log(sum);
					sum = all_price-item1_price;
					// sum1 = sum;
					$(".addon_a1").remove();
					$(".totalprice").replaceWith(' <span class="totalprice">'+ sum +'</span>');
					return sum2;	
				}
				if($(".a2").is(":checked") == false){
					// console.log(sum2);
					sum = all_price-item2_price;
					// sum2 = sum;
					$(".totalprice").replaceWith(' <span class="totalprice">'+ sum +'</span>');
					$(".addon_a2").remove();
					return sum2;	
				}
		});
		
	});
</script>