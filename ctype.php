<form name="myform" method="post" action="ctype.php">
	<input type="text" name="number" class="number" value="" /><br/>
	<input type="submit" name="submit" value="submit" />
<!-- <button class="check">Check</button> -->
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$numbers = $_POST['number'];
	$exploded = explode(',', $numbers);
	$expr1 = '/^[a-z A-Z]/';
	$expr = '/^[1-9]{2,3}/';
	$input_count = count($exploded);
	
	$findchar = 0;
	if(!empty($exploded)){
		foreach($exploded as $key=>$value) {
		    if (preg_match($expr1,$value)){
		    	$findchar = 1;
		    }
		}
	}
	if($findchar == 1){
		echo"Please Enter only Numeric values";
	}
	else if(preg_match_all($expr1, $numbers)){
		echo"Please Enter only Numeric values<br/>";	
	}
	else if($input_count<5){
		echo"Please Enter minimum 5 Numbers<br/>";	
	}
	else if(preg_match_all($expr, $numbers)){
		echo"Please Enter only single 1-9 digits<br/><br/>";	
	}

	else{
		print_r($exploded);echo"<br/>";
		
		// print_r(array_reverse($exploded,true));
		// echo $input_count;
			
			// function test_odd($var)
			// {	
			// 	// $rr = array();
			// 	// $rr['r1'] = range(1,3);
			// 	// var_dump($rr['r1']);
			// 	// var_dump(array_search('1,2,3', $exp));
			// 	// var_dump($var);
			// 	// var_dump($rr['r1']);
			// 	// $set1 = '1,2,3';
			// 	// if(array_search($set1,$var)){
			// 	// 	echo"asdsa";
			// 	// 	// return($var & 1);
			// 	// }
			// }
			// print_r(array_filter($exploded,"test_odd"));
			
			// $set1 = '1,2,3';
			// echo gettype($set1);
			// $exp1 = explode(', ',$set1);
			// // $rr = array();
			// // $rr['r1'] = range(1,3);
			// if(!empty($set1)){
			// 	foreach ($exp1 as $k=>$v){
			// 	var_dump($v);
			// 	echo array_search($v,$exploded);
			// 	}
			// 	// return($var & 1);
			// }
		function check($exp){
			// var_dump($exp);
			var_dump(array_count_values($exp));
			$checkcnt = array_count_values($exp);
			$checkinnercnt = array_count_values($checkcnt);
			var_dump($checkinnercnt);
			// var_dump(count($checkcnt));
			// var_dump(array_keys(($checkcnt)));
			// var_dump(array_values($checkcnt));
			// var_dump(count(array_values(($checkcnt))));
			// var_dump(in_array('2',$checkcnt));
			// foreach($checkcnt as $val){		
			// 	if($val == '2' ){
			// 		// $val += $val;
			// 		// echo $val;
			// 		return true;
			// 	}
			// }
			// return false;
			foreach($checkinnercnt as $key=>$val){
				// echo $key;
				if($key == '2' && $val == '3')
					return true;
				else if($key == '3' && $val == '3'){
					return true;
				}
				else if($key == '2' && $val == '5'){
					return true;
				}
			}
			return false;


			// $first_three_elements = range($exp,3); 
			// var_dump($first_three_elements);
			// $reve_of_first_three = array_reverse($first_three_elements,true);
			// var_dump($reve_of_first_three);
			// $skip_middle = next($first_three_elements);
			// var_dump($skip_middle);

			// for($i=0;$i<count($exp);$i++){
			// 	// var_dump($exp[$i]);//each values as string
			// 	// var_dump($exp[$i]+1);//adding one in each values
			// 	// var_dump($exp[$i+1]);//each values as string
			// 	if(isset($exp[$i+1]) && $exp[$i]+1 != $exp[$i+1]){
			// 		return false;
			// 	}
			// }
			// return true;			
			// foreach ($exp as $key=>$value){
			// 	// var_dump($key);
			// 	var_dump($value);

			// 	// if(preg_match('/\d+/',$value, $matches)){
			// 	// if(preg_match('/(\d).+(\d)/', $value, $matches)){
			// 	// if(preg_match('/^123/', $value, $matches)){
			// 	// if(preg_match('/^\d+/', $value, $matches)){
   //  // 				var_dump($matches[0]);
   //  // 			}	
			// }
		}
		var_dump(check($exploded));
		
	}












		// function check($exp){
		// 	var_dump($exp);
		// 	for($i=0;$i<count($exp);$i++){
		// 		var_dump($exp[$i+1]);
		// 		var_dump($exp[$i]+1);
		// 		if(isset($exp[$i+1]) && $exp[$i]+1 != $exp[$i+1] ){
		// 			return false;
		// 			// return 0;
		// 		}		
		// 	}
		// 	return true;
		// 	// return 1;
		// }
		// var_dump(check($exploded));
		// if(check($exploded)){
		// 	echo"sadsa";
		// }
	


}
?>




<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$(".check").click(checkctype);
	// 		// checkctype();
	// })
	// function checkctype(){
	// 	var no = 0;		
	// 	no = $('.number').val();
	// 	console.log(no);
	// 	if(isNaN(no)){
	// 		alert('please enter only numbers');
	// 		$('.number').val("").focus();
	// 	}

	// }
</script>	


