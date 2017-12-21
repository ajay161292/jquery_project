<input type="button" value="Add" onClick="addmore('mytable','quantity','price','addon_price');" />
<!-- <input type="button" value="Remove" onClick="deleteRow('mytable')" /> -->
<!-- <form id="myform" name="myform"> -->
	<table id="mytable" border="1">
		<tbody>
			<tr id='row_0'>
				<td>Item</td>
				<td><label>Quantity :</label><input type="number" name="quantity" class="quantity" value="1" min="0" oninput="calculate('row_0')"></td>
				<td><label>Item Price :</label><input type="text" name="price" class="item_price" value="" oninput="calculate('row_0')"></td>
				<td><label>Addon Price :</label><input type="text" name="addon_price" class="addon_price" value="" oninput="calculate('row_0')">
					<input type="checkbox" name="addon" class="addon" onclick="calculate('row_0')">
				</td>
				<td><label>Subtotal :</label><input type="text" name="subtotal" class="subtotal" value="" readonly="readonly" />
					<!-- <a href="#" class="addmore" onclick="addmore('mytable','quantity','price','addon_price');">Add More</a> -->
					<!-- <a href="#" class="addmore" onclick="deleteRow('mytable','quantity','price','addon_price');">Remove</a> -->
				</td>
				<!-- <td><a href="#" class="addmore" onclick="addmore('mytable','quantity','price','addon_price');">Add More</a></td> -->
				<td><a href="#" class="deleterow" id="first" >Remove</a></td>
			</tr>

		</tbody>	
	</table><br/>
	
	<label>Total Items:</label><input type="text" class="grdcnt" id="grdcnt" value="" readonly="readonly" />
	<label>Total Price:</label><input type="text" class="grdtot" id ="grdtot" value="" readonly="readonly" />
	<input type="button" id="submit" name="" value="Submit">

<!-- <button onclick=alert(this.innerHTML)>Show <b>innerHTML</b></button> -->
<!-- <button onclick=alert(this.outerHTML)>Show <b>outerHTML</b></button> -->
<!-- </form> -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// $('#row_0').find('#first').remove();
		var grtotal = 0;
	    $('.subtotal').each(function(){
	    	grtotal += Number($(this).val());
	    	document.getElementById('grdtot').value = Number(grtotal);
	    })
	});
	

function calculate(elementID) {
	// console.log(elementID);
    var mainRow = document.getElementById(elementID);
    var quantity = mainRow.querySelectorAll('[name=quantity]')[0].value;
    var itemprice = mainRow.querySelectorAll('[name=price]')[0].value;
    var addonprice = mainRow.querySelectorAll('[name=addon_price]')[0].value;
    var checked = document.querySelectorAll('input:checked');
    // console.log(itemprice);
    // console.log(addonprice);
    var total = mainRow.querySelectorAll('[name=subtotal]')[0];
    var myResult1 = itemprice * quantity;
    
    if(isNaN(itemprice) || isNaN(addonprice)){    	
    	alert('please enter numeric values only');
    }
    // alert(checked);
    if(addonprice > 0 && checked.length > 0){
    	myResult1 = myResult1+Number(addonprice);
    }
    if(isNaN(myResult1)){
    	myResult1 = 0;
    }else{
    	myResult1 = myResult1;
    }
    total.value = myResult1;
    var grtotal = 0;
    $('.subtotal').each(function(){
    	grtotal += Number($(this).val());
    	if(isNaN(grtotal)){
    		grtotal = 0;
	    }else{
	    	grtotal = Number(grtotal);
	    }
    	document.getElementById('grdtot').value = Number(grtotal);
    })

}
// function getRandomArbitrary(min, max) {
//     return Math.random() * (max - min) + min;
// }
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function addmore(tableID,quantity,price,addonprice){
	
	var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    
    document.getElementById('grdcnt').value = Number(rowCount+1);
   	var row = table.insertRow(rowCount);
        // console.log(row);return false;
    var colCount = table.rows[0].cells.length;
    
    var randno = 0;
    randno = getRandomInt(1,50);
    randno = Number(randno);
    // console.log(parseInt(randno));
    row.id = 'row_'+randno;
    for (var i = 0; i < colCount; i++) {
        var newcell = row.insertCell(i);
        newcell.outerHTML = table.rows[0].cells[i].outerHTML;            
    }

   	var listitems= row.getElementsByTagName("input");
        // console.log(listitems.length);
        for (i=0; i<listitems.length; i++) {
          listitems[i].setAttribute("oninput", "calculate('"+row.id+"')");
          listitems[i].setAttribute("onclick", "calculate('"+row.id+"')");
          listitems[i].setAttribute("onblur", "javascript: if(isNaN(this.value)){this.value='';}");
        }
    var alinks= row.getElementsByTagName("a");
    	// console.log(alinks);
        for (i=0; i<alinks.length; i++) {
        	// console.log(row.id);
          alinks[i].setAttribute("onclick", "deleteRow('"+row.id+"')");
        }  
    
	// var strToAdd = '<tr class="row"><td>Item</td><td><input type="number" name="'+quantity+'" class="quantity" value="1" min="0"></td><td><input type="text" name="'+price+'" class="item_price" value=""></td><td><input type="text" name="'+addonprice+'" class="addon_price" value=""></td><td><input type="text" class="subtotal" value="" readonly="readonly" /><a href="#" class="deleteraw" onclick="deleteraw(this);"> - </a></td></tr>';
	// 	$('#mytable').append(strToAdd);
}
function deleteRow(rowId) {
	// console.log(rowId);	
	$('#' + rowId + '').closest('tr').remove();	

	var table = document.getElementById('mytable');
    var rowCount = table.rows.length;
	document.getElementById('grdcnt').value = Number(rowCount+1-1);

	var grtotal = 0;
    $('.subtotal').each(function(){
    	grtotal += Number($(this).val());
    	document.getElementById('grdtot').value = Number(grtotal);
    })
    
}







// function allnumeric(inputtxt){  
//       	var numbers = /^[0-9]+$/;  
//       	if(inputtxt.value.match(numbers))  
//       	{
//       		// document.myform.price.focus();  
//       		inputtxt.focus();  
//       		return true;  
//       	}  
//       	else{  
//       		alert('Please input numeric characters only');  
//       		// document.myform.price.focus();  
//       		inputtxt.focus();  
//       		return false;  
//       	}  
//    	}
</script>	