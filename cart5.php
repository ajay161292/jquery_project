<table id="myTable">
    <thead>
        <tr><th>Product name</th><th>Qty</th><th>Price</th>
    <th align="center"><span id="amount" class="amount">Amount</span> </th></tr>
    </thead>
    <tfoot>
        <tr><td colspan="2"></td><td align="right"><span id="total" class="total">TOTAL</span> </td></tr>
    </tfoot>
    <tbody>
        <tr>
          <td>Product 1</td><td>
              <select value="" class="qty" name="qty">
                  <option value="1">1</option>
                  <option value="2">2</option>
              </select></td>
          <td><input type="text" value="11.60" class="price"></td>
          <td align="center"><span id="amount" class="amount">0</span> eur</td>
        </tr>

        <tr><td>Product 2</td>
          <td><select value="" class="qty" name="qty">
                <option value="1">1</option>
                <option value="2">2</option>
              </select></td>
          <td><input type="text" value="15.26" class="price"></td>
          <td align="center"><span id="amount" class="amount">0</span> eur</td>
        </tr>    
    </tbody>
</table>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    update_amounts();
    $('.qty').change(function() {
        update_amounts();
    });
});
function update_amounts()
{
    var sum = 0.0;
    $('#myTable > tbody  > tr').each(function() {
        console.log(this);
        var qty = $(this).find('option:selected').val();
        var price = $(this).find('.price').val();
        var amount = (qty*price)
        sum+=amount;
        $(this).find('.amount').text(''+amount);
    });
    //just update the total to sum    
}

</script>